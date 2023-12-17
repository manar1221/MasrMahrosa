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
        Schema::create('araml_families', function (Blueprint $table) {
            $table->id();
            $table->string('case_id')->nullable();
            $table->foreignId('araml_id')->constrained('aramls')->onDelete('cascade');

            $table->string('Resident_name1')->nullable();
            $table->string('Resident_age1')->nullable();
            $table->string('Resident_relate1')->nullable();
            $table->string('Resident_job1')->nullable();

            $table->string('Resident_name2')->nullable();
            $table->string('Resident_age2')->nullable();
            $table->string('Resident_relate2')->nullable();
            $table->string('Resident_job2')->nullable();

            $table->string('Resident_name3')->nullable();
            $table->string('Resident_age3')->nullable();
            $table->string('Resident_relate3')->nullable();
            $table->string('Resident_job3')->nullable();

            $table->string('Resident_name4')->nullable();
            $table->string('Resident_age4')->nullable();
            $table->string('Resident_relate4')->nullable();
            $table->string('Resident_job4')->nullable();

            $table->string('child1_name')->nullable();
            $table->string('child1_level')->nullable();
            $table->string('child1_school')->nullable();
            $table->string('child1_edu_level')->nullable();
            $table->string('child1_need')->nullable();

            $table->string('child2_name')->nullable();
            $table->string('child2_level')->nullable();
            $table->string('child2_school')->nullable();
            $table->string('child2_edu_level')->nullable();
            $table->string('child2_need')->nullable();

            $table->string('child3_name')->nullable();
            $table->string('child3_level')->nullable();
            $table->string('child3_school')->nullable();
            $table->string('child3_edu_level')->nullable();
            $table->string('child3_need')->nullable();

            $table->string('child4_name')->nullable();
            $table->string('child4_level')->nullable();
            $table->string('child4_school')->nullable();
            $table->string('child4_edu_level')->nullable();
            $table->string('child4_need')->nullable();

            $table->string('child5_name')->nullable();
            $table->string('child5_level')->nullable();
            $table->string('child5_school')->nullable();
            $table->string('child5_edu_level')->nullable();
            $table->string('child5_need')->nullable();

            $table->string('child6_name')->nullable();
            $table->string('child6_level')->nullable();
            $table->string('child6_school')->nullable();
            $table->string('child6_edu_level')->nullable();
            $table->string('child6_need')->nullable();

            $table->string('health_name1')->nullable();
            $table->string('health_status1')->nullable();
            $table->string('illness1')->nullable();
            $table->string('need1')->nullable();

            $table->string('health_name2')->nullable();
            $table->string('health_status2')->nullable();
            $table->string('illness2')->nullable();
            $table->string('need2')->nullable();

            $table->string('health_name3')->nullable();
            $table->string('health_status3')->nullable();
            $table->string('illness3')->nullable();
            $table->string('need3')->nullable();

            $table->string('health_name4')->nullable();
            $table->string('health_status4')->nullable();
            $table->string('illness4')->nullable();
            $table->string('need4')->nullable();
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
        Schema::dropIfExists('araml_families');
    }
};
