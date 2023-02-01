<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
           

            $table->id() ;
            $table->string('email');
            $table->string('username');
            $table->string('password'); 
            $table->string('firstname');
            $table->string('lastname');
            $table->date('birth_of_date');
            $table->string('photo') ;
            $table->integer('height');
            $table->decimal('weight',8,2);
            $table->string('country');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
            $table->timestamps('deleted_at ');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
