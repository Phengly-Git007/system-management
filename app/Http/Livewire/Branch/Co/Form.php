<?php

namespace App\Http\Livewire\Branch\Co;

use Livewire\Component;
use App\Models\Branch\CreditOfficer as Co;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Form extends Component
{
    use AuthorizesRequests;
    public $name,$name_kh,$gender=true,$dob,$id_card,$phone,$address;
    public Co $model;
    protected $rules = [
        'name'      => ['required', 'string','max:190'],
        'name_kh'   => ['required', 'string','max:190'],
        'gender'    => ['required','boolean'],
        'dob'       => ['required', 'date'],
        'id_card'   => ['required', 'string','max:50'],
        'phone'     => ['required', 'string','max:190'],
        'address'   => ['required', 'string'],

    ];

     // function "mount" use to update data with store function
     public function mount($id = null){

        $this->model = Co::findOrNew($id);
        $this->name = $this->model->name ;
        $this->name_kh = $this->model->name_kh ;
        $this->gender = $this->model->gender == "" ? true : $this->model->gender;
        $this->dob = $this->model->dob ;
        $this->id_card = $this->model->id_card ;
        $this->phone = $this->model->phone ;
        $this->address = $this->model->address ;

    }

    public function render()
    {
        $this->authorize('credit-officer');
        return view('livewire.branch.co.form');
    }

    public function store(){
        $this->validate();
        $co = $this->model;
        $co->name = $this->name;
        $co->name_kh = $this->name_kh;
        $co->gender = $this->gender;
        $co->dob = $this->dob;
        $co->id_card = $this->id_card;
        $co->phone = $this->phone;
        $co->address = $this->address;
        $co->save();
        $this->redirectRoute('branch.co.index');
    }

}
