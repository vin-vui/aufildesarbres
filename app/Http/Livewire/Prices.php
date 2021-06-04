<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

use App\Models\Price;

class Prices extends Component
{
    use WithFileUploads;

    public $public, $description, $price, $image, $price_id;

    public $isOpen = 0;
    public $confirming;

    public function render()
    {
        return view('web.admin.prices.index', [
            'prices' => Price::all(),
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
        $this->public = '';
        $this->description = '';
        $this->price = '';
        $this->image = '';
        $this->price_id = '';
    }

    public function store()
    {
        $dataValid = $this->validate([
            'public' => 'required',
            'description' => 'nullable',
            'price' => 'required',
            'image' => 'nullable',
        ]);

        if ($dataValid['image']) {
            $dataValid['image'] = Self::store_image($dataValid['image']);
        } else {
            $dataValid['image'] = null;
        }

        Price::updateOrCreate(['id' => $this->price_id], $dataValid);

        session()->flash('alert', $this->price_id ? 'Price Updated Successfully.' : 'Price Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $price = Price::findOrFail($id);

        $this->price_id = $id;
        $this->public = $price->public;
        $this->description = $price->description;
        $this->price = $price->price;
        $this->image = $price->image;

        $this->openModal();
    }

    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function delete($id)
    {
        $price = Price::find($id)->delete();

        session()->flash('message', 'Price Deleted Successfully.');
    }

    private function store_image($image)
    {
        $new = false;
        $store = false;

        /**
         * Si c'est la catégorie n'éxiste pas
         */
        if ($this->price_id == "") {
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
            $current_price = Price::find($this->price_id);

            if ($current_price->image == null) {
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
                if ($current_price->image != $image) {
                    if ($image != "") {
                        if(File::exists('storage/'.$current_price->image)) {
                            File::delete('storage/'.$current_price->image);
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
                return $current_price->image;
            } else {
                return null;
            }
        }
    }

}
