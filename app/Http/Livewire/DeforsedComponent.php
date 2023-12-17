<?php

namespace App\Http\Livewire;

use App\Models\Deforsed;
use Livewire\Component;
use Livewire\WithPagination;

class DeforsedComponent extends Component
{
    use WithPagination;
    public $deforse_id;

    public function deleteCase()
    {
        $deforse_case = Deforsed::find($this->deforse_id);

        if ($deforse_case) {
        $deforse_case->delete();
        session()->flash('message','تم حذف الحالة بنجاح');
        }
        else {
            // Handle the case where the record doesn't exist
            session()->flash('message', 'Case not found or already deleted.');
        }
    }

    public function render()
    {
        $deforse_cases = Deforsed::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.deforsed-component',['deforse_cases'=>$deforse_cases]);
    }
}
