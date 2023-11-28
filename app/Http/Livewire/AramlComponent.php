<?php

namespace App\Http\Livewire;

use App\Models\Araml;
use Livewire\Component;
use Livewire\WithPagination;

class AramlComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $araml_cases = Araml::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.araml-component',['araml_cases'=>$araml_cases]);
    }
}
