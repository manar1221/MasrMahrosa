<?php

namespace App\Http\Livewire;

use App\Models\Aytam;
use Livewire\Component;
use Livewire\WithPagination;

class AytamComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $aytam_cases = Aytam::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.aytam-component',['aytam_cases'=>$aytam_cases]);
    }
}
