<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-bolsa_empleo')->create('company_professionals', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('company_id')->constrained('companies');
            $table->foreignId('prefessional_id')->constrained('professionals');
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
        Schema::connection('pgsql-bolsa_empleo')->dropIfExists('company_professionals');
    }
}
