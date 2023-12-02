<?php

namespace App\Http\Livewire;

use App\Models\Araml;
use App\Models\Aytam;
use App\Models\Deforsed;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $deforse_cases = Deforsed::paginate(12);
        $araml_cases = Araml::paginate(12);
        $aytam_cases = Aytam::paginate(12);
        return view('livewire.home-component',['deforse_cases'=>$deforse_cases,'araml_cases'=>$araml_cases,'aytam_cases'=>$aytam_cases]);
    }
}
