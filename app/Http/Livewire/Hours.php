<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

use App\Models\Hour;

class Hours extends Component
{
    use WithFileUploads;

    public $title, $description, $image, $hour_id;

    public $isOpen = 0;
    public $confirming;

    public function render()
    {
        return view('web.admin.hours.index', [
            'hours' => Hour::all(),
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
        $this->hour_id = '';
    }

    public function store()
    {
        $dataValid = $this->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable',
        ]);

        if ($dataValid['image']) {
            $dataValid['image'] = Self::store_image($dataValid['image']);
        } else {
            $dataValid['image'] = null;
        }

        Hour::updateOrCreate(['id' => $this->hour_id], $dataValid);

        session()->flash('alert', $this->hour_id ? 'Hour Updated Successfully.' : 'Hour Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $hour = Hour::findOrFail($id);

        $this->hour_id = $id;
        $this->title = $hour->title;
        $this->description = $hour->description;
        $this->image = $hour->image;

        $this->openModal();
    }

    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function delete($id)
    {
        $hour = Hour::find($id)->delete();

        session()->flash('message', 'Hour Deleted Successfully.');
    }

    private function store_image($image)
    {
        $new = false;
        $store = false;

        /**
         * Si c'est la catégorie n'éxiste pas
         */
        if ($this->hour_id == "") {
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
            $current_hour = Hour::find($this->hour_id);

            if ($current_hour->image == null) {
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
                if ($current_hour->image != $image) {
                    if ($image != "") {
                        if(File::exists('storage/'.$current_hour->image)) {
                            File::delete('storage/'.$current_hour->image);
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
                return $current_hour->image;
            } else {
                return null;
            }
        }
    }

}
