<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-bolsa_empleo')->create('professional_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professional_id')->constrained('professionals');
            $table->string('employer');
            $table->string('position');
            $table->string('job_description');
            $table->date('start_date');
            $table->date('finish_date')->nullable();
            $table->string('reason_leave');
            $table->boolean('current_work')->nullable();
            $table->string('state')->default('ACTIVE');
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
        Schema::connection('pgsql-bolsa_empleo')->dropIfExists('professional_experiences');
    }
}
