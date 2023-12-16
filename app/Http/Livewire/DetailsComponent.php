<?php

namespace App\Http\Livewire;

use App\Models\Deforsed;
use App\Models\Fmaily;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $case_id;

    public function mount($case_id)
    {
        $this->case_id = $case_id;
    }

    public function render()
    {
        $case = Deforsed::where('case_id',$this->case_id)->first();
        $family = Fmaily::where('case_id',$this->case_id)->first();
        return view('livewire.details-component',['case' => $case, 'family' => $family]);
    }
}
