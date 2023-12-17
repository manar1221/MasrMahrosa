<?php

namespace App\Http\Livewire;

use App\Models\Araml;
use App\Models\AramlFamily;
use App\Models\Aytam;
use App\Models\AytamFamily;
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
        if (Araml::where('case_id', 'like', $this->case_id)->exists()) {
            $case = Araml::where('case_id', 'like', $this->case_id)->first();
            $family = AramlFamily::where('case_id',$this->case_id)->first();
        }

        elseif (Deforsed::where('case_id', 'like', $this->case_id)->exists()) {
            $case = Deforsed::where('case_id', 'like', $this->case_id)->first();
            $family = Fmaily::where('case_id',$this->case_id)->first();
        }

        else {
            $case = Aytam::where('case_id', 'like', $this->case_id)->first();
            $family = AytamFamily::where('case_id',$this->case_id)->first();
        }

        // $case = Deforsed::where('case_id',$this->case_id)->first();
        // $family = Fmaily::where('case_id',$this->case_id)->first();
        return view('livewire.details-component',['case' => $case, 'family' => $family]);
    }
}
