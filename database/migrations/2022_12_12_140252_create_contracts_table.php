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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->double('salary');
            $table->date('start_date');
            $table->date('end_date');
            // $table->int('type_contracts_id');            
            $table->timestamps(); 

            $table->unsignedBigInteger('type_contracts_id');
            $table->foreign('type_contracts_id')->references('id')->on('type_contracts');           
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
};
