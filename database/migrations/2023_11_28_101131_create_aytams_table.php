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
        Schema::create('aytams', function (Blueprint $table) {
            $table->id();
            $table->string('case_id')->unique();
            $table->string('name');
            $table->string('national_id')->unique();
            $table->string('age');
            $table->string('phone');
            $table->string('period');
            $table->text('address');
            $table->string('type')->default('أيتام');

            $table->enum('home_add',['مدينة','عشوائية'])->default('عشوائية');
            $table->enum('home_status',['ايجار جديد','ايجار قديم','بيت العائلة'])->default('ايجار جديد');
            $table->enum('home_des',['صحي','غير صحي'])->default('صحي');
            $table->enum('room_no',['حجرة واحدة','حجرتين','ثلاثة فاكثر'])->default('حجرتين');
            $table->enum('bathroom',['خاصة','مشتركة'])->default('خاصة');

            $table->enum('number_of_gas_stove',['0','1','2'])->default('1');
            $table->enum('gas_stove_status',['سليمة','غير سليمة'])->default('سليمة');
            $table->text('gas_stove_note')->nullable();

            $table->enum('washing_machine_no',['0','1','2'])->default('1');
            $table->enum('washing_machine_status',['سليمة','غير سليمة'])->default('سليمة');
            $table->text('washing_machine_note')->nullable();

            $table->enum('Refrigerator_no',['0','1','2'])->default('1');
            $table->enum('Refrigerator_status',['سليمة','غير سليمة'])->default('سليمة');
            $table->text('Refrigerator_note')->nullable();

            $table->enum('tv_no',['0','1','2'])->default('1');
            $table->enum('tv_status',['سليمة','غير سليمة'])->default('سليمة');
            $table->text('tv_note')->nullable();

            $table->enum('fans_no',['0','1','2'])->default('1');
            $table->enum('fans_status',['سليمة','غير سليمة'])->default('سليمة');
            $table->text('fans_note')->nullable();

            $table->enum('heater_no',['0','1','2'])->default('1');
            $table->enum('heater_status',['سليمة','غير سليمة'])->default('سليمة');
            $table->text('heater_note')->nullable();

            $table->enum('bed_no',['0','1','2'])->default('1');
            $table->enum('bed_status',['سليمة','غير سليمة'])->default('سليمة');
            $table->enum('bed_enough',['كافى','غير كافى'])->default('غير كافى');
            $table->text('bed_note')->nullable();

            $table->enum('cupboard_no',['0','1','2'])->default('1');
            $table->enum('cupboard_status',['سليمة','غير سليمة'])->default('سليمة');
            $table->enum('cupboard_enough',['كافى','غير كافى'])->default('غير كافى');
            $table->text('cupboard_note')->nullable();

            $table->enum('living_no',['0','1','2'])->default('1');
            $table->enum('living_status',['سليمة','غير سليمة'])->default('سليمة');
            $table->enum('living_enough',['كافى','غير كافى'])->default('غير كافى');
            $table->text('living_note')->nullable();

            $table->enum('chair_no',['0','1','2'])->default('1');
            $table->enum('chair_status',['سليمة',' غير سليمة '])->default('سليمة');
            $table->enum('chair_enough',['كافى','غير كافى'])->default('غير كافى');
            $table->text('chair_note')->nullable();

            $table->enum('table_no',['0','1','2'])->default('1');
            $table->enum('table_status',['سليمة','غير سليمة'])->default('سليمة');
            $table->enum('table_enough',['كافى','غير كافى'])->default('غير كافى');
            $table->text('table_note')->nullable();

            $table->enum('Plumbing_status',['سليمة','غير سليمة'])->default('سليمة');
            $table->text('Plumbing_note')->nullable();;

            $table->enum('elec_status',['سليمة','غير سليمة'])->default('سليمة');
            $table->text('elec_note')->nullable();

            $table->enum('Carpentry_status',['سليمة','غير سليمة'])->default('سليمة');
            $table->text('Carpentry_note')->nullable();

            $table->enum('Restorations_status',['سليمة','غير سليمة'])->default('سليمة');
            $table->text('Restorations_note')->nullable();

            $table->enum('breadwinner',['الام','الجدة','الخالة','العمة','اخرين'])->default('الام');

            $table->enum('mother_status',['مطلقة','ارملة','هجر','متزوجة','اخري'])->default('مطلقة');

            $table->date('divorce_date')->nullable();

            $table->enum('edu_level',['مؤهل عالي','شهاده الثانويه العام','مؤهل متوسط','شهادة محو امية','امية'])->default('امية');

            $table->enum('reed_write_status',['تستطيع القراءة','لا تستطيع القراء'])->default('تستطيع القراءة');

            $table->enum('reed_write_want',['ارغب','لا ارغب'])->default('لا ارغب');


            $table->enum('health_status',['صحة جيدة','اصابات','اعاقات','مرض مزمن'])->default('اصابات');

            $table->enum('treatment',['منتظم شهري','غير منتظم','لايوجد'])->default('غير منتظم');

            $table->enum('treatment_status',['التامين الصحي','غير منتظم','نفقة الدولة','تبرع','يتم شرائه علي نفقة الام'])->default('يتم شرائه علي نفقة الام');

            $table->enum('treatment_not_subscribed',['نعم','لا'])->default('نعم');

            $table->enum('problem_solve',['الضرب','السباب','الحوار والمناقشة','اخري'])->default('السباب');

            $table->enum('child_reward',['تشجيع معنوي','تشجيع مادي','لاتكافئ','اخري'])->default('لاتكافئ');

            $table->enum('help_problem',['الخال','العم','الجدة','المنارة','اخري'])->default('الجدة');

            $table->enum('problems',['نعم','لا'])->default('لا');

            $table->enum('what_problems',['مناوشات','اخري','لايوجد'])->default('لايوجد');

            $table->string('expense_dad')->nullable();
            $table->string('salary')->nullable();
            $table->string('manara_help')->nullable();
            $table->string('revenues_total')->nullable();

            $table->string('rent')->nullable();
            $table->string('tube')->nullable();
            $table->string('feed')->nullable();
            $table->string('transfers')->nullable();
            $table->string('expenses_total')->nullable();

            $table->string('breadwinner_job')->nullable();

            $table->enum('old_projects',['نعم','لا'])->default('لا');

            $table->enum('project_type',['بقالة','الخياطة','تقسيط','ماكولات','اخري'])->default('اخري');

            $table->enum('project_want',['نعم','لا'])->default('نعم');

            $table->enum('project_want_type',['بقالة','الخياطة','تقسيط','ماكولات','اخري'])->default('بقالة');

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
        Schema::dropIfExists('aytams');
    }
};
