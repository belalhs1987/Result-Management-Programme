<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHumResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hum_results', function (Blueprint $table) {
             $table->integer('roll');
            $table->string('name');
            $table->integer('bangla_mcq');
            $table->integer('bangla_cq');
            $table->integer('english');
            $table->integer('ict_mcq');
            $table->integer('ict_cq');
            $table->integer('ict_prac');
            $table->integer('s_work_mcq');
            $table->integer('s_work_cq');
            $table->integer('history_mcq');
            $table->integer('history_cq');
            $table->integer('civics_mcq');
            $table->integer('civics_cq');
            $table->integer('eco_mcq');
            $table->integer('eco_cq');
            $table->integer('agri_mcq');
            $table->integer('agri_cq');
            $table->integer('gpa_w_4th');
            $table->integer('gpa');
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
        Schema::dropIfExists('hum_results');
    }
}
