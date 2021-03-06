<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('ref_no');
            $table->string('location');
            $table->string('experience_level');
            $table->text('skills_required');
            $table->text('duties');
            $table->string('min_salary');
            $table->string('max_salary');
            $table->string('no_of_openings');
            $table->datetime('expiry');
            $table->unsignedBigInteger('job_function_id');
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
        Schema::dropIfExists('jobs');
    }
}
