<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deforseds', function (Blueprint $table) {
            $table->id();
            $table->string('case_id')->unique();
            $table->string('name');
            $table->string('national_id')->unique();
            $table->string('age')->nullable();
            $table->string('phone')->nullable();
            $table->string('period')->nullable();
            $table->text('address');

            $table->enum('home_add',['city','regular']);
            $table->enum('home_status',['new','old','family']);
            $table->enum('home_des',['healthy','not_healthy']);
            $table->enum('room_no',['1room','2room','3+room']);
            $table->enum('bathroom',['private','public']);

            $table->enum('number_of_gas_stove',['0','1','2']);
            $table->enum('gas_stove_status',['good','not_good']);
            $table->text('gas_stove_note')->nullable();

            $table->enum('washing_machine_no',['0','1','2']);
            $table->enum('washing_machine_status',['good','not_good']);
            $table->text('washing_machine_note')->nullable();

            $table->enum('Refrigerator_no',['0','1','2']);
            $table->enum('Refrigerator_status',['good','not_good']);
            $table->text('Refrigerator_note')->nullable();

            $table->enum('tv_no',['0','1','2']);
            $table->enum('tv_status',['good','not_good']);
            $table->text('tv_note')->nullable();

            $table->enum('fans_no',['0','1','2']);
            $table->enum('fans_status',['good','not_good']);
            $table->text('fans_note')->nullable();

            $table->enum('heater_no',['0','1','2']);
            $table->enum('heater_status',['good','not_good']);
            $table->text('heater_note')->nullable();

            $table->enum('bed_no',['0','1','2']);
            $table->enum('bed_status',['good','not_good']);
            $table->enum('bed_enough',['enough','not_enough']);
            $table->text('bed_note')->nullable();

            $table->enum('cupboard_no',['0','1','2']);
            $table->enum('cupboard_status',['good','not_good']);
            $table->enum('cupboard_enough',['enough','not_enough']);
            $table->text('cupboard_note')->nullable();

            $table->enum('living_no',['0','1','2']);
            $table->enum('living_status',['good','not_good']);
            $table->enum('living_enough',['enough','not_enough']);
            $table->text('living_note')->nullable();

            $table->enum('chair_no',['0','1','2']);
            $table->enum('chair_status',['good','not_good']);
            $table->enum('chair_enough',['enough','not_enough']);
            $table->text('chair_note')->nullable();

            $table->enum('table_no',['0','1','2']);
            $table->enum('table_status',['good','not_good']);
            $table->enum('table_enough',['enough','not_enough']);
            $table->text('table_note')->nullable();

            $table->enum('Plumbing_status',['good','not_good']);
            $table->text('Plumbing_note');

            $table->enum('elec_status',['good','not_good']);
            $table->text('elec_note')->nullable();

            $table->enum('Carpentry_status',['good','not_good']);
            $table->text('Carpentry_note')->nullable();

            $table->enum('Restorations_status',['good','not_good']);
            $table->text('Restorations_note')->nullable();

            $table->enum('breadwinner',['mother','grandmother','aunti','aunt','others8']);

            $table->enum('mother_status',['divorced','leave','married','others'])->default('divorced');

            $table->date('divorce_date');

            $table->string('Resident_name1');
            $table->string('Resident_age1');
            $table->string('Resident_relate1');
            $table->string('Resident_job1');

            $table->enum('edu_level',['hiegh','high_school','middle','Literacy','illiteracy']);

            $table->enum('reed_write_status',['good','not_good']);

            $table->enum('reed_write_want',['want','dont_want']);

            $table->string('child1_name');
            $table->string('child1_level');
            $table->string('child1_school');
            $table->string('child1_edu_level');
            $table->string('child1_need');

            $table->enum('health_status',['good','injuries','disabilities','disease']);

            $table->enum('treatment',['regular','irregular','nothing']);

            $table->enum('treatment_status',['health_insurance','irregular','State_expense','donation','mother_money']);

            $table->enum('treatment_not_subscribed',['yes','no']);

            $table->string('health_name1');
            $table->string('health_status1');
            $table->string('illness1');
            $table->string('need1');

            $table->enum('problem_solve',['beating','insults','discussion','others']);

            $table->enum('child_reward',['moral_encouragement','financial_encouragement','Dont_reward','others']);

            $table->enum('help_problem',['Unclem','Uncled','grandma','manara','others']);

            $table->enum('problems',['yes','no']);

            $table->enum('what_problems',['Skirmishes','others','nothing']);

            $table->string('expense_dad');
            $table->string('salary');
            $table->string('manara_help');
            $table->string('revenues_total');

            $table->string('rent');
            $table->string('tube');
            $table->string('feed');
            $table->string('transfers');
            $table->string('expenses_total');

            $table->string('breadwinner_job');

            $table->enum('old_projects',['yes','no']);

            $table->enum('project_type',['grocery','sewing','installment','foods','others']);

            $table->enum('project_want',['yes','no']);

            $table->enum('project_want_type',['grocery','sewing','installment','foods','others']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deforseds');
    }
};
