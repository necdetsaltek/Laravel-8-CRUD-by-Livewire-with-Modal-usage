<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Sampledata;

class Posts extends Component
{
	public $sampledata, $first_name, $last_name, $gender, $data_id;

    public function render()
    {
    	$this->sampledata = Sampledata::all();
    	
        return view('livewire.posts');
    }

    public function resetInputFields()
    {
    	$this->first_name = '';
    	$this->last_name = '';
    	$this->gender = '';
    }

    public function store()
    {
    	$validation = $this->validate([
    		'first_name'		=>	'required',
    		'last_name'			=>	'required',
    		'gender'			=>	'required'
    	]);

    	Sampledata::create($validation);

    	session()->flash('message', 'Data Created Successfully.');

    	$this->resetInputFields();

    	$this->emit('userStore');
    }

    public function edit($id)
    {
        $data = Sampledata::findOrFail($id);
        $this->data_id = $id;
        $this->first_name = $data->first_name;
        $this->last_name = $data->last_name;
        $this->gender = $data->gender;
    }

    public function update()
    {
        $validate = $this->validate([
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'gender'        =>  'required'
        ]);

        $data = Sampledata::find($this->data_id);

        $data->update([
            'first_name'       =>   $this->first_name,
            'last_name'         =>  $this->last_name,
            'gender'            =>  $this->gender
        ]);

        session()->flash('message', 'Data Updated Successfully.');

        $this->resetInputFields();

        $this->emit('userStore');
    }

    public function delete($id)
    {
        Sampledata::find($id)->delete();
        session()->flash('message', 'Data Deleted Successfully.');
    }
}
