<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

use App\Models\Photo;

class Photos extends Component
{
    use WithFileUploads;

    public $title, $description, $image, $category, $photo_id;

    public $isOpen = 0;
    public $confirming;

    public function render()
    {
        return view('web.admin.photos.index', [
            'photos' => Photo::all(),
        ]);
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->description = '';
        $this->image = '';
        $this->category = '';
        $this->photo_id = '';
    }

    public function store()
    {
        $dataValid = $this->validate([
            'title' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable',
            'category' => 'nullable',
        ]);

        if ($dataValid['image']) {
            $dataValid['image'] = Self::store_image($dataValid['image']);
        } else {
            $dataValid['image'] = null;
        }

        Photo::updateOrCreate(['id' => $this->photo_id], $dataValid);

        session()->flash('alert', $this->photo_id ? 'Photo Updated Successfully.' : 'Photo Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $photo = Photo::findOrFail($id);

        $this->photo_id = $id;
        $this->title = $photo->title;
        $this->description = $photo->description;
        $this->image = $photo->image;
        $this->category = $photo->category;

        $this->openModal();
    }

    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function delete($id)
    {
        $photo = Photo::find($id)->delete();

        session()->flash('message', 'Photo Deleted Successfully.');
    }

    private function store_image($image)
    {
        $new = false;
        $store = false;

        /**
         * Si c'est la catégorie n'éxiste pas
         */
        if ($this->photo_id == "") {
            $new = true;
            /**
             * On check si une image a été uploadée
             */
            if ($image != "") {
                $store = true;
            }
        }
        /**
         * Si c'est la catégorie éxiste
         */
        else {
            /**
             * Si n'y a pas d'image déjà enregistrée
             */
            $current_photo = Photo::find($this->photo_id);

            if ($current_photo->image == null) {
                if ($image != "") {
                    $store = true;
                }
            }
            /**
             * S'il y a déjà une image enregistrée
             */
            else {
                /**
                 * Si on veut changer l'image déjà présente
                 */
                if ($current_photo->image != $image) {
                    if ($image != "") {
                        if(File::exists('storage/'.$current_photo->image)) {
                            File::delete('storage/'.$current_photo->image);
                        }

                        $store = true;
                    }
                }
            }
        }

        if ($store) {
            return $this->image->store('images', 'public');
        } else {
            if (!$new) {
                return $current_photo->image;
            } else {
                return null;
            }
        }
    }

}
