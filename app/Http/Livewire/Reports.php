<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Illuminate\Support\Str;

use App\Models\Report;

class Reports extends Component
{
    public $title, $logo, $description, $go_to, $link, $new_id;

    public $isOpen = 0;
    public $confirming;

    public function render()
    {
        return view('web.admin.reports.index', [
            'reports' => Report::all(),
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
        $this->logo = '';
        $this->description = '';
        $this->go_to = '';
        $this->link = '';
        $this->new_id = '';
    }

    public function store()
    {
        $dataValid = $this->validate([
            'title' => 'required',
            'logo' => 'required',
            'description' => 'required',
            'go_to' => 'required',
            'link' => 'nullable',
        ]);

        Report::updateOrCreate(['id' => $this->new_id], $dataValid);

        session()->flash('alert', $this->new_id ? 'New Updated Successfully.' : 'New Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $new = Report::findOrFail($id);

        $this->new_id = $id;
        $this->title = $new->title;
        $this->logo = $new->logo;
        $this->description = $new->description;
        $this->go_to = $new->go_to;
        $this->link = $new->link;

        $this->openModal();
    }

    public function confirmDelete($id)
    {
        $this->confirming = $id;
    }

    public function delete($id)
    {
        $new = Report::find($id)->delete();

        session()->flash('message', 'New Deleted Successfully.');
    }

}
