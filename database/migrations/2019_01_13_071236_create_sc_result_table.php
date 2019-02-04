<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sc_result', function (Blueprint $table) {
            $table->integer('roll');
            $table->string('name');
            $table->integer('bangla_mcq');
            $table->integer('bangla_cq');
            $table->integer('english');
            $table->integer('ict_mcq');
            $table->integer('ict_cq');
            $table->integer('ict_prac');
            $table->integer('chem_mcq');
            $table->integer('chem_cq');
            $table->integer('chem_prac');
            $table->integer('phy_mcq');
            $table->integer('phy_cq');
            $table->integer('phy_prac');
            $table->integer('bio_mcq');
            $table->integer('bio_cq');
            $table->integer('bio_prac');
            $table->integer('math_mcq');
            $table->integer('math_cq');
            $table->integer('math_prac');
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
        Schema::dropIfExists('sc_result');
    }
}
