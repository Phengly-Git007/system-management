<?php

namespace App\Http\Livewire\Branch\Co;

use Livewire\Component;
use App\Models\Branch\CreditOfficer;
use Livewire\WithPagination;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Index extends Component
{
    // call pagination
    use WithPagination,AuthorizesRequests;
    protected $paginationTheme = 'bootstrap';

    public $search,$limit = 20;

    public function render(){

        $this->authorize('credit-officer');


        $credit_officers = CreditOfficer::search($this->search)
                        ->latest()->paginate($this->limit);
        //
        return view('livewire.branch.co.index',compact('credit_officers'));
    }
    public function delete($id){

        try{
            // detect error from server
            DB::beginTransaction();

            CreditOfficer::destroy($id);
            // get event swal(name event) of sweetalert from (app.blade.php)
            $this->dispatchBrowserEvent('swal',[
                'title' => 'Deleted Successfully',
                'timer' => 3000,
                'icon'  => 'success',
                'toast' => true,
                'position' => 'top-end',
                'showConfirmButton' => false,
            ]);
            // detect error from server if error use commit
            DB::commit();
        }catch(Exception $e){
            // back to normal pre-delete data use rollback
            DB::rollBack();
            $this->dispatchBrowserEvent('swal',[
                'title' => 'Error',
                'timer' => 3000,
                'icon'  => 'danger',
                'toast' => true,
                'position' => 'top-end',
                'showConfirmButton' => false,
            ]);

        }
    }
}
