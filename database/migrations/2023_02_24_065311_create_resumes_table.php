<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('city');
            $table->string('project');
            $table->string('language');
            $table->string('interests');
            $table->text('objective')->nullable();
            $table->text('summary')->nullable();
            $table->text('education')->nullable();
            $table->text('work_experience')->nullable();
            $table->text('skill_id')->nullable();
            $table->text('professional_memberships')->nullable();
            $table->text('awards_and_achievements')->nullable();
            $table->text('references')->nullable();
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
        Schema::dropIfExists('resumes');
    }
}