<?php

namespace App\Http\Livewire;

use App\Models\Araml;
use App\Models\Aytam;
use App\Models\Deforsed;
use Illuminate\Support\Facades\DB;
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

        // if (Araml::where('case_id', 'like', $this->search_term)->exists())
        // {
        //     $cases = Araml::where('case_id', 'like', $this->search_term)
        //         ->orderBy('created_at', 'DESC')
        //         ->paginate(12);
        // }
        // elseif (Deforsed::where('case_id', 'like', $this->search_term)->exists())
        // {
        //     $cases = Deforsed::where('case_id', 'like', $this->search_term)
        //         ->orderBy('created_at', 'DESC')
        //         ->paginate(12);
        // }
        // else
        // {
        //     $cases = Aytam::where('case_id', 'like', $this->search_term)
        //         ->orderBy('created_at', 'DESC')
        //         ->paginate(12);
        // }


        $searchTerm = $this->search_term;

        $cases = DB::table('aramls')
        ->where('case_id', 'like', $searchTerm)
        ->select('id', 'case_id', 'name', 'age', 'type', 'created_at', DB::raw("'Araml' as model"))
        ->union(
            DB::table('deforseds')
                ->where('case_id', 'like', $searchTerm)
                ->select('id','case_id', 'name', 'age', 'type', 'created_at',  DB::raw("'Deforsed' as model"))
        )
        ->union(
            DB::table('aytams')
                ->where('case_id', 'like', $searchTerm)
                ->select('id','case_id', 'name', 'age', 'type', 'created_at',  DB::raw("'Aytam' as model"))
        )
        ->orderBy('created_at', 'DESC')
        ->paginate(12);

        return view('livewire.search-component', ['cases' => $cases]);
    }

}


        // $cases = DB::table('aramls')
        //     ->where('case_id', 'like', $searchTerm)
        //     ->select('*', DB::raw("'Araml' as model"))
        //     ->union(
        //         DB::table('deforseds')
        //             ->where('case_id', 'like', $searchTerm)
        //             ->select('*', DB::raw("'Deforsed' as model"))
        //     )
        //     ->union(
        //         DB::table('aytams')
        //             ->where('case_id', 'like', $searchTerm)
        //             ->select('*', DB::raw("'Aytam' as model"))
        //     )
        //     ->orderBy('created_at', 'DESC')
        //     ->paginate(12);



        // $models = ['Aramls', 'Deforseds', 'Aytams'];
        // $cases = null;

        // foreach ($models as $model) {
        //     $query = $model::where('case_id', 'like', $searchTerm);

        //     if ($query->exists()) {
        //         $cases = $query->orderBy('created_at', 'DESC')->paginate(12);
        //         break;
        //     }
        // }

        // $case_1 = Araml::where('case_id', 'like', $this->search_term)
        //     ->orderBy('created_at', 'DESC')
        //     ->paginate(12);

        // $case_2 = Deforsed::where('case_id', 'like', $this->search_term)
        //     ->orderBy('created_at', 'DESC')
        //     ->paginate(12);

        // $case_3 = Aytam::where('case_id', 'like', $this->search_term)
        //     ->orderBy('created_at', 'DESC')
        //     ->paginate(12);
        // return view('livewire.search-component', ['case_1' => $case_1, 'case_2' => $case_2 , 'case_3' => $case_3]);



        // $cases = DB::table('aramls')
        // ->select('*')
        // ->where('case_id', 'like', $this->search_term)
        // ->orWhere(function ($query) {
        //     $query->from('deforseds')
        //         ->select('*')
        //         ->where('case_id', 'like', $this->search_term);
        // })
        // ->orWhere(function ($query) {
        //     $query->from('aytams')
        //         ->select('*')
        //         ->where('case_id', 'like', $this->search_term);
        // })
        // ->orderBy('created_at', 'DESC')
        // ->paginate(12);
