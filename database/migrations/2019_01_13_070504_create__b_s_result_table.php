<?php

use Illuminate\Support\Facades\Schema; 
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBSResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_b_s_result', function (Blueprint $table) {
            $table->integer('roll');
            $table->string('name');
            $table->integer('bangla_mcq');
            $table->integer('bangla_cq');
            $table->integer('english');
            $table->integer('ict_mcq');
            $table->integer('ict_cq');
            $table->integer('ict_prac');
            $table->integer('acc_mcq');
            $table->integer('acc_cq');
            $table->integer('fin_mcq');
            $table->integer('fin_cq');
            $table->integer('b_org_mcq');
            $table->integer('b_org_cq');
            $table->integer('eco_mcq');
            $table->integer('eco_cq');
            $table->integer('agri_mcq');
            $table->integer('agri_cq');
            $table->integer('agri_prac');
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
        Schema::dropIfExists('_b_s_result');
    }
}
