<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastName');
            $table->string('fullName');
            $table->string('email');
            $table->nullableTimestamps();
        });

          // Insert some stuff
        DB::table('persons')->insert(
            array(
                'name' => 'Luis',
                'LastName' => 'Arce',
                'fullName' => 'Luis Arce',
                'email' => 'larce@larce.com'
            ),
            array(
                'name' => 'Maria Elena',
                'LastName' => 'Ortiz',
                'fullName' => 'Maria Elena Ortiz',
                'email' => 'maria@larce.com'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('persons');
    }
}
