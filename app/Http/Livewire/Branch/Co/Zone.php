<?php

namespace App\Http\Livewire\Branch\Co;

use App\Models\Branch\CreditOfficer;
use App\Models\Cambodia\Commune;
use App\Models\Cambodia\District;
use App\Models\Cambodia\Province;
use Livewire\Component;

class Zone extends Component
{
    public $district,$communes = [];
    public $coms = [];
    public $co;

    public function mount($id = ''){
        $this->co = CreditOfficer::findOrFail($id);
    }

    public function render()
    {
        $provinces = Province::latest('id')->get();
        return view('livewire.branch.co.zone',compact('provinces'));
    }

    public function districtChange(){
        $this->communes = District::findOrFail($this->district)->getCommunes;
    }

    public function addZoneToCo(){
       $this->co->zones()->sync($this->coms);
    }
}
