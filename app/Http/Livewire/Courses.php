<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

use App\Models\Course;

class Courses extends Component
{
    use WithFileUploads;

    public $title, $order, $level, $max_height, $description, $color, $image, $course_id;

    public $isOpen = 0;
    public $confirming;

    public function render()
    {
        return view('web.admin.courses.index', [
            'courses' => Course::orderBy('order')->get(),
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
        $this->order = 0;
        $this->level = '';
        $this->max_height = 0;
        $this->description = '';
        $this->color = '';
        $this->image = '';
        $this->course_id = '';
    }

    public function store()
    {
        $dataValid = $this->validate([
            'title' => 'required',
            'order' => 'required',
            'level' => 'required',
            'max_height' => 'nullable',
            'description' => 'required',
            'color' => 'nullable',
            'image' => 'nullable',
        ]);

        if ($dataValid['image']) {
            $dataValid['image'] = Self::store_image($dataValid['image']);
        } else {
            $dataValid['image'] = null;
        }

        Course::updateOrCreate(['id' => $this->course_id], $dataValid);

        session()->flash('alert', $this->course_id ? 'Course Updated Successfully.' : 'Course Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);

        $this->course_id = $id;
        $this->title = $course->title;
        $this->order = $course->order;
        $this->description = $course->description;
        $this->image = $course->image;
        $this->color = $course->color;
        $this->level = $course->level;
        $this->max_height = $course->max_height;

        $this->openModal();
    }

    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function delete($id)
    {
        $course = Course::find($id)->delete();

        session()->flash('message', 'Course Deleted Successfully.');
    }

    private function store_image($image)
    {
        $new = false;
        $store = false;

        /**
         * Si c'est la catégorie n'éxiste pas
         */
        if ($this->course_id == "") {
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
            $current_course = Course::find($this->course_id);

            if ($current_course->image == null) {
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
                if ($current_course->image != $image) {
                    if ($image != "") {
                        if(File::exists('storage/'.$current_course->image)) {
                            File::delete('storage/'.$current_course->image);
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
                return $current_course->image;
            } else {
                return null;
            }
        }
    }

}
