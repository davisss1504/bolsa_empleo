<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguaguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-bolsa_empleo')->create('languagues', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('prefessional_id')->constrained('professionals');
            $table->string('description', 100);
            $table->string('written_level', 20);
            $table->string('spoken_level', 20);
            $table->string('reading_level', 20);
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
        Schema::connection('pgsql-bolsa_empleo')->dropIfExists('languagues');
    }
}
