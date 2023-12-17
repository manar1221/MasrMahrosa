<?php

namespace App\Http\Livewire;

use App\Models\Araml;
use Livewire\Component;
use Livewire\WithPagination;

class AramlComponent extends Component
{
    use WithPagination;
    public $araml_id;

    public function deleteCase()
    {
        $araml_case = Araml::find($this->araml_id);

        if ($araml_case) {
        $araml_case->delete();
        session()->flash('message','تم حذف الحالة بنجاح');
        }
        else {
            // Handle the case where the record doesn't exist
            session()->flash('message', 'Case not found or already deleted.');
        }
    }

    public function render()
    {
        $araml_cases = Araml::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.araml-component',['araml_cases'=>$araml_cases]);
    }
}
