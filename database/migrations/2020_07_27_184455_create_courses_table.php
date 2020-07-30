<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql-bolsa_empleo')->create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('prefessional_id')->constrained('professionals');
            $table->string('event_type', 100);
            $table->string('institution', 50);
            $table->date('start_date');
            $table->date('has_titling');
            $table->date('hours');
            $table->string('type_certification', 50);
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
        Schema::connection('pgsql-bolsa_empleo')->dropIfExists('courses');
    }
}
