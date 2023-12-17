<?php

namespace App\Http\Livewire;

use App\Models\Araml;
use App\Models\Aytam;
use App\Models\Deforsed;
use Livewire\Component;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    use WithPagination;

    public $q;
    public $search_term;
    public $searchcase_id;

    public function deleteCase()
{
    $araml_case = Araml::find($this->searchcase_id);

    if ($araml_case && $araml_case->type === 'ارامل') {
        $araml_case->delete();
        session()->flash('message', 'تم حذف الحالة بنجاح');
    }
    else
    {
        $aytam_case = Aytam::find($this->searchcase_id);

        if ($aytam_case && $aytam_case->type === 'أيتام') {
            $aytam_case->delete();
            session()->flash('message', 'تم حذف الحالة بنجاح');
        }
        else
        {
            $deforsed_case = Deforsed::find($this->searchcase_id);

            if ($deforsed_case && $deforsed_case->type === 'مطلقات') {
                $deforsed_case->delete();
                session()->flash('message', 'تم حذف الحالة بنجاح');
            }
            else
            {
                session()->flash('message', 'الحالة غير موجودة');
            }
        }
    }
}

    public function mount()
    {
        $this->fill(request()->only('q'));
        $this->search_term = '%'.$this->q . '%';
    }

    public function render()
{
    if (Araml::where('case_id', 'like', $this->search_term)->exists()) {
        $cases = Araml::where('case_id', 'like', $this->search_term)
            ->orderBy('created_at', 'DESC')
            ->paginate(12);
    } elseif (Deforsed::where('case_id', 'like', $this->search_term)->exists()) {
        $cases = Deforsed::where('case_id', 'like', $this->search_term)
            ->orderBy('created_at', 'DESC')
            ->paginate(12);
    } else {
        $cases = Aytam::where('case_id', 'like', $this->search_term)
            ->orderBy('created_at', 'DESC')
            ->paginate(12);
    }

    return view('livewire.search-component', ['cases' => $cases]);
}

}
