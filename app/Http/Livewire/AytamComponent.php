<?php

namespace App\Http\Livewire;

use App\Models\Aytam;
use Livewire\Component;
use Livewire\WithPagination;

class AytamComponent extends Component
{
    use WithPagination;
    public $aytam_id;

    public function deleteCase()
    {
        $aytam_case = Aytam::find($this->aytam_id);

        if ($aytam_case) {
        $aytam_case->delete();
        session()->flash('message','تم حذف الحالة بنجاح');
        }
        else {
            // Handle the case where the record doesn't exist
            session()->flash('message', 'Case not found or already deleted.');
        }
    }

    public function render()
    {
        $aytam_cases = Aytam::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.aytam-component',['aytam_cases'=>$aytam_cases]);
    }
}
