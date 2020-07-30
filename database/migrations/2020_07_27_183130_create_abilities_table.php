<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::connection('pgsql-bolsa_empleo')->create('abilities', function (Blueprint $table) {
            $table->integer('id');
            $table->foreignId('prefessional_id')->constrained('professionals');
            $table->string('category', 50);
            $table->string('description', 100);
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
        Schema::connection('pgsql-bolsa_empleo')->dropIfExists('abilities');
    }
}
