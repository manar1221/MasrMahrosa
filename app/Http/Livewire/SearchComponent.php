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
