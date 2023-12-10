<?php

namespace App\Http\Livewire;

use App\Models\Deforsed;
use Livewire\Component;
use Livewire\WithPagination;

class DeforsedComponent extends Component
{
    use WithPagination;
    public $case_id;

    public function deleteCase()
    {
        $deforse_case = Deforsed::find($this->case_id);
        $deforse_case->delete();
        session()->flash('message','Case has been deleted!');
    }

    public function render()
    {
        $deforse_cases = Deforsed::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.deforsed-component',['deforse_cases'=>$deforse_cases]);
    }
}
