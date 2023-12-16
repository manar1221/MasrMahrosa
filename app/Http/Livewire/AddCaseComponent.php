<?php

namespace App\Http\Livewire;

use App\Models\Deforsed;
use App\Models\Fmaily;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddCaseComponent extends Component
{
    use WithFileUploads;

    public $case_id;
    public $name;
    public $national_id;
    public $age;
    public $phone;
    public $period;
    public $address;

    public $home_add = 'عشوائية';
    public $home_status = 'ايجار جديد';
    public $home_des = 'صحي';
    public $room_no = 'حجرتين';
    public $bathroom = 'خاصة';

    public $number_of_gas_stove = '1';
    public $gas_stove_status = 'سليمة';
    public $gas_stove_note;

    public $washing_machine_no = '1';
    public $washing_machine_status = 'سليمة';
    public $washing_machine_note;

    public $Refrigerator_no = '1';
    public $Refrigerator_status = 'سليمة';
    public $Refrigerator_note;

    public $tv_no = '1';
    public $tv_status = 'سليمة';
    public $tv_note;

    public $fans_no = '1';
    public $fans_status = 'سليمة';
    public $fans_note;

    public $heater_no = '1';
    public $heater_status = 'سليمة';
    public $heater_note;

    public $bed_no = '1';
    public $bed_status = 'سليمة';
    public $bed_enough = 'غير كافى';
    public $bed_note;

    public $cupboard_no = '1';
    public $cupboard_status = 'سليمة';
    public $cupboard_enough = 'غير كافى';
    public $cupboard_note;

    public $living_no = '1';
    public $living_status = 'سليمة';
    public $living_enough = 'غير كافى';
    public $living_note;

    public $chair_no = '1';
    public $chair_status = 'سليمة';
    public $chair_enough = 'غير كافى';
    public $chair_note;

    public $table_no = '1';
    public $table_status = 'سليمة';
    public $table_enough = 'غير كافى';
    public $table_note;

    public $Plumbing_status = 'سليمة';
    public $Plumbing_note;

    public $elec_status = 'سليمة';
    public $elec_note;

    public $Carpentry_status = 'سليمة';
    public $Carpentry_note;

    public $Restorations_status = 'سليمة';
    public $Restorations_note;

    public $breadwinner = 'الام';

    public $mother_status = 'مطلقة';

    public $divorce_date ;

    public $Resident_name1;
    public $Resident_age1;
    public $Resident_relate1;
    public $Resident_job1;

    public $Resident_name2;
    public $Resident_age2;
    public $Resident_relate2;
    public $Resident_job2;

    public $Resident_name3;
    public $Resident_age3;
    public $Resident_relate3;
    public $Resident_job3;

    public $Resident_name4;
    public $Resident_age4;
    public $Resident_relate4;
    public $Resident_job4;

    public $edu_level = 'امية';
    public $reed_write_status = 'تستطيع القراءة';
    public $reed_write_want = 'لا ارغب';

    public $child1_name;
    public $child1_level;
    public $child1_school;
    public $child1_edu_level;
    public $child1_need;

    public $child2_name;
    public $child2_level;
    public $child2_school;
    public $child2_edu_level;
    public $child2_need;

    public $child3_name;
    public $child3_level;
    public $child3_school;
    public $child3_edu_level;
    public $child3_need;

    public $child4_name;
    public $child4_level;
    public $child4_school;
    public $child4_edu_level;
    public $child4_need;

    public $child5_name;
    public $child5_level;
    public $child5_school;
    public $child5_edu_level;
    public $child5_need;

    public $child6_name;
    public $child6_level;
    public $child6_school;
    public $child6_edu_level;
    public $child6_need;

    public $health_status = 'اصابات';
    public $treatment = 'غير منتظم';
    public $treatment_status = 'يتم شرائه علي نفقة الام';
    public $treatment_not_subscribed = 'نعم';


    public $health_name1;
    public $health_status1;
    public $illness1;
    public $need1;

    public $health_name2;
    public $health_status2;
    public $illness2;
    public $need2;

    public $health_name3;
    public $health_status3;
    public $illness3;
    public $need3;

    public $health_name4;
    public $health_status4;
    public $illness4;
    public $need4;

    public $problem_solve = 'السباب';
    public $child_reward = 'لاتكافئ';
    public $help_problem = 'الجدة';
    public $problems = 'لا';
    public $what_problems = 'لايوجد';

    public $expense_dad ;
    public $salary;
    public $manara_help;
    public $revenues_total;

    public $rent;
    public $tube;
    public $feed;
    public $transfers;
    public $expenses_total;

    public $breadwinner_job;

    public $old_projects = 'لا';
    public $project_type = 'اخري';
    public $project_want = 'نعم';
    public $project_want_type = 'بقالة';


    public function addCase()
    {
        $this->validate([
            'case_id'=>'required',
            'name'=>'required',
            'national_id' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'address' => 'required',
            // 'mother_status' => 'required',
        ]);
        $case= new Deforsed();
        $case->case_id =$this->case_id ;
        $case->name =$this->name ;
        $case->national_id =$this->national_id ;
        $case->age =$this->age ;
        $case->phone =$this->phone ;
        $case->period =$this->period ;
        $case->address =$this->address ;

        $case->home_add =$this->home_add ;
        $case->home_status =$this->home_status ;
        $case->home_des =$this->home_des ;
        $case->room_no =$this->room_no ;
        $case->bathroom =$this->bathroom ;

        $case->number_of_gas_stove =$this->number_of_gas_stove ;
        $case->gas_stove_status =$this->gas_stove_status ;
        $case->gas_stove_note =$this->gas_stove_note ;

        $case->washing_machine_no =$this->washing_machine_no ;
        $case->washing_machine_status =$this->washing_machine_status ;
        $case->washing_machine_note =$this->washing_machine_note ;

        $case->Refrigerator_no =$this->Refrigerator_no ;
        $case->Refrigerator_status =$this->Refrigerator_status ;
        $case->Refrigerator_note =$this->Refrigerator_note ;

        $case->tv_no =$this->tv_no ;
        $case->tv_status =$this->tv_status ;
        $case->tv_note =$this->tv_note ;

        $case->fans_no =$this->fans_no ;
        $case->fans_status =$this->fans_status ;
        $case->fans_note =$this->fans_note ;

        $case->heater_no =$this->heater_no ;
        $case->heater_status =$this->heater_status ;
        $case->heater_note =$this->heater_note ;

        $case->bed_no =$this->bed_no ;
        $case->bed_status =$this->bed_status ;
        $case->bed_enough =$this->bed_enough ;
        $case->bed_note =$this->bed_note ;

        $case->cupboard_no =$this->cupboard_no ;
        $case->cupboard_status =$this->cupboard_status ;
        $case->cupboard_enough =$this->cupboard_enough ;
        $case->cupboard_note =$this->cupboard_note ;

        $case->living_no =$this->living_no ;
        $case->living_status =$this->living_status ;
        $case->living_enough =$this->living_enough ;
        $case->living_note =$this->living_note ;

        $case->chair_no =$this->chair_no ;
        $case->chair_status =$this->chair_status ;
        $case->chair_enough =$this->chair_enough ;
        $case->chair_note =$this->chair_note ;

        $case->table_no =$this->table_no ;
        $case->table_status =$this->table_status ;
        $case->table_enough =$this->table_enough ;
        $case->table_note =$this->table_note ;

        $case->Plumbing_status =$this->Plumbing_status ;
        $case->Plumbing_note =$this->Plumbing_note ;

        $case->elec_status =$this->elec_status ;
        $case->elec_note =$this->elec_note ;

        $case->Carpentry_status =$this->Carpentry_status ;
        $case->Carpentry_note =$this->Carpentry_note ;

        $case->Restorations_status =$this->Restorations_status ;
        $case->Restorations_note =$this->Restorations_note ;

        $case->breadwinner =$this->breadwinner ;

        $case->mother_status =$this->mother_status ;

        $case->divorce_date =$this->divorce_date ;

        $case->edu_level =$this->edu_level ;
        $case->reed_write_status =$this->reed_write_status ;
        $case->reed_write_want =$this->reed_write_want ;

        $case->health_status =$this->health_status ;
        $case->treatment =$this->treatment ;
        $case->treatment_status =$this->treatment_status ;
        $case->treatment_not_subscribed =$this->treatment_not_subscribed ;

        $case->problem_solve =$this->problem_solve ;
        $case->child_reward =$this->child_reward ;
        $case->help_problem =$this->help_problem ;
        $case->problems =$this->problems ;
        $case->what_problems =$this->what_problems ;

        $case->expense_dad =$this->expense_dad ;
        $case->salary =$this->salary ;
        $case->manara_help =$this->manara_help ;
        $case->revenues_total =$this->revenues_total ;

        $case->rent =$this->rent ;
        $case->tube =$this->tube ;
        $case->feed =$this->feed ;
        $case->transfers =$this->transfers ;
        $case->expenses_total =$this->expenses_total ;

        $case->breadwinner_job =$this->breadwinner_job ;
        $case->old_projects =$this->old_projects ;
        $case->project_type =$this->project_type ;
        $case->project_want =$this->project_want ;
        $case->project_want_type =$this->project_want_type ;

        $family = new Fmaily();
        $family->case_id =$case->case_id ;
        if(!($family->Resident_name1 && $family->Resident_age1 && $family->Resident_relate1 && $family->Resident_job1))
        {
            $family->Resident_name1 =$this->Resident_name1 ;
            $family->Resident_age1 =$this->Resident_age1 ;
            $family->Resident_relate1 =$this->Resident_relate1 ;
            $family->Resident_job1 =$this->Resident_job1 ;
        }

        if(!($family->Resident_name2 && $family->Resident_age2 && $family->Resident_relate2 && $family->Resident_job2))
        {
            $family->Resident_name2 =$this->Resident_name2 ;
            $family->Resident_age2 =$this->Resident_age2 ;
            $family->Resident_relate2 =$this->Resident_relate2 ;
            $family->Resident_job2 =$this->Resident_job2 ;
        }

        if(!($family->Resident_name3 && $family->Resident_age3 && $family->Resident_relate3 && $family->Resident_job3))
        {
            $family->Resident_name3 =$this->Resident_name3 ;
            $family->Resident_age3 =$this->Resident_age3 ;
            $family->Resident_relate3 =$this->Resident_relate3 ;
            $family->Resident_job3 =$this->Resident_job3 ;
         }

         if(!($family->Resident_name4 && $family->Resident_age4 && $family->Resident_relate4 && $family->Resident_job4))
         {
            $family->Resident_name4 =$this->Resident_name4 ;
            $family->Resident_age4 =$this->Resident_age4 ;
            $family->Resident_relate4 =$this->Resident_relate4 ;
            $family->Resident_job4 =$this->Resident_job4 ;
         }

         if(!($family->child1_name && $family->child1_level && $family->child1_school && $family->child1_edu_level && $family->child1_need))
        {
            $family->child1_name =$this->child1_name ;
            $family->child1_level =$this->child1_level ;
            $family->child1_school =$this->child1_school ;
            $family->child1_edu_level =$this->child1_edu_level ;
            $family->child1_need =$this->child1_need ;
        }

        if(!($family->child2_name && $family->child2_level && $family->child2_school && $family->child2_edu_level && $family->child2_need))
        {
            $family->child2_name =$this->child2_name ;
            $family->child2_level =$this->child2_level ;
            $family->child2_school =$this->child2_school ;
            $family->child2_edu_level =$this->child2_edu_level ;
            $family->child2_need =$this->child2_need ;
        }

        if(!($family->child3_name && $family->child3_level && $family->child3_school && $family->child3_edu_level && $family->child3_need))
        {
            $family->child3_name =$this->child3_name ;
            $family->child3_level =$this->child3_level ;
            $family->child3_school =$this->child3_school ;
            $family->child3_edu_level =$this->child3_edu_level ;
            $family->child3_need =$this->child3_need ;
        }

        if(!($family->child4_name && $family->child4_level && $family->child4_school && $family->child4_edu_level && $family->child4_need))
        {
            $family->child4_name =$this->child4_name ;
            $family->child4_level =$this->child4_level ;
            $family->child4_school =$this->child4_school ;
            $family->child4_edu_level =$this->child4_edu_level ;
            $family->child4_need =$this->child4_need ;
        }

        if(!($family->child5_name && $family->child5_level && $family->child5_school && $family->child5_edu_level && $family->child5_need))
        {
            $family->child5_name =$this->child5_name ;
            $family->child5_level =$this->child5_level ;
            $family->child5_school =$this->child5_school ;
            $family->child5_edu_level =$this->child5_edu_level ;
            $family->child5_need =$this->child5_need ;
        }

        if(!($family->child6_name && $family->child6_level && $family->child6_school && $family->child6_edu_level && $family->child6_need))
        {
            $family->child6_name =$this->child6_name ;
            $family->child6_level =$this->child6_level ;
            $family->child6_school =$this->child6_school ;
            $family->child6_edu_level =$this->child6_edu_level ;
            $family->child6_need =$this->child6_need ;
        }

        if(!($family->health_name1 && $family->health_status1 && $family->illness1 && $family->need1))
        {
            $family->health_name1 =$this->health_name1 ;
            $family->health_status1 =$this->health_status1 ;
            $family->illness1 =$this->illness1 ;
            $family->need1 =$this->need1 ;
        }

        if(!($family->health_name2 && $family->health_status2 && $family->illness2 && $family->need2))
        {
            $family->health_name2=$this->health_name2;
            $family->health_status2=$this->health_status2;
            $family->illness2=$this->illness2;
            $family->need2=$this->need2;
        }

        if(!($family->health_name3 && $family->health_status3 && $family->illness3 && $family->need3))
        {
            $family->health_name3 =$this->health_name3 ;
            $family->health_status3 =$this->health_status3 ;
            $family->illness3 =$this->illness3 ;
            $family->need3 =$this->need3 ;
        }

        if(!($family->health_name4 && $family->health_status4 && $family->illness4 && $family->need4))
        {
            $family->health_name4 =$this->health_name4 ;
            $family->health_status4 =$this->health_status4 ;
            $family->illness4 =$this->illness4 ;
            $family->need4 =$this->need4 ;
        }

        // if ($case) {
        //     $case->save();
        //     $case->fmaily()->saveMany([$family]);
        //     session()->flash('message','Case has been added!');
        //     return redirect()->route('deforsed');
        //     }
        //     else {
        //         session()->flash('message', 'Case not found or already deleted.');
        //     }
        $case->save();
        $case->fmaily()->saveMany([$family]);
        session()->flash('message','Case has been added!');
        return redirect()->route('deforsed');

    }

    public function render()
    {
        return view('livewire.add-case-component');
    }
}
