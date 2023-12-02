<?php

namespace App\Http\Livewire;

use App\Models\Deforsed;
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

    public $home_add = 'regular';
    public $home_status = 'old';
    public $home_des= 'not_healthy';
    public $room_no= '2room';
    public $bathroom= 'private';

    public $number_of_gas_stove= '1';
    public $gas_stove_status= 'good';
    public $gas_stove_note;

    public $washing_machine_no= '1';
    public $washing_machine_status= 'good';
    public $washing_machine_note;

    public $Refrigerator_no= '1';
    public $Refrigerator_status= 'good';
    public $Refrigerator_note;

    public $tv_no= '1';
    public $tv_status= 'good';
    public $tv_note;

    public $fans_no= '1';
    public $fans_status= 'good';
    public $fans_note;

    public $heater_no= '1';
    public $heater_status= 'good';
    public $heater_note;

    public $bed_no= '1';
    public $bed_status= 'good';
    public $bed_enough = 'not_enough';
    public $bed_note;

    public $cupboard_no= '1';
    public $cupboard_status= 'good';
    public $cupboard_enough = 'not_enough';
    public $cupboard_note;

    public $living_no= '1';
    public $living_status= 'good';
    public $living_enough = 'not_enough';
    public $living_note;

    public $chair_no= '1';
    public $chair_status= 'good';
    public $chair_enough = 'not_enough';
    public $chair_note;

    public $table_no= '1';
    public $table_status= 'good';
    public $table_enough = 'not_enough';
    public $table_note;

    public $Plumbing_status = 'good';
    public $Plumbing_note;

    public $elec_status = 'good';
    public $elec_note;

    public $Carpentry_status = 'good';
    public $Carpentry_note;

    public $Restorations_status = 'good';
    public $Restorations_note;

    public $breadwinner = 'mother';

    public $mother_status = 'divorced';

    public $divorce_date ;

    public $Resident_name1;
    public $Resident_age1;
    public $Resident_relate1;
    public $Resident_job1;

    public $edu_level = 'middle';
    public $reed_write_status = 'good';
    public $reed_write_want = 'dont_want';

    public $child1_name;
    public $child1_level;
    public $child1_school;
    public $child1_edu_level;
    public $child1_need;

    public $health_status = 'good';
    public $treatment = 'irregular';
    public $treatment_status = 'irregular';
    public $treatment_not_subscribed = 'yes';


    public $health_name1;
    public $health_status1;
    public $illness1;
    public $need1;

    public $problem_solve = 'insults';
    public $child_reward = 'Dont_reward';
    public $help_problem = 'grandma';
    public $problems = 'no';
    public $what_problems = 'nothing';

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

    public $old_projects = 'yes';
    public $project_type = 'grocery';
    public $project_want = 'yes';
    public $project_want_type = 'grocery';


    public function addCase()
    {
        $this->validate([
            'case_id'=>'required',
            'name'=>'required',
            'national_id' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'mother_status' => 'required',
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

        $case->Resident_name1 =$this->Resident_name1 ;
        $case->Resident_age1 =$this->Resident_age1 ;
        $case->Resident_relate1 =$this->Resident_relate1 ;
        $case->Resident_job1 =$this->Resident_job1 ;

        $case->edu_level =$this->edu_level ;
        $case->reed_write_status =$this->reed_write_status ;
        $case->reed_write_want =$this->reed_write_want ;

        $case->child1_name =$this->child1_name ;
        $case->child1_level =$this->child1_level ;
        $case->child1_school =$this->child1_school ;
        $case->child1_edu_level =$this->child1_edu_level ;
        $case->child1_need =$this->child1_need ;

        $case->health_status =$this->health_status ;
        $case->treatment =$this->treatment ;
        $case->treatment_status =$this->treatment_status ;
        $case->treatment_not_subscribed =$this->treatment_not_subscribed ;

        $case->health_name1 =$this->health_name1 ;
        $case->health_status1 =$this->health_status1 ;
        $case->illness1 =$this->illness1 ;
        $case->need1 =$this->need1 ;

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

        $case->save();
        session()->flash('message','Case has been added!');
        return redirect()->route('cases');

    }

    public function render()
    {
        return view('livewire.add-case-component');
    }
}
