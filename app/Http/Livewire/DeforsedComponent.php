<?php

namespace App\Http\Livewire;

use App\Models\Deforsed;
use Livewire\Component;
use Livewire\WithPagination;

class DeforsedComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $deforse_cases = Deforsed::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.deforsed-component',['deforse_cases'=>$deforse_cases]);
    }
}
