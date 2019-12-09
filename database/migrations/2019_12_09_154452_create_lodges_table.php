<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLodgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lodges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lodge_name');
            $table->string('lodge_type');
            $table->text('description');
            $table->string('state');
            $table->string('local_govt');
            $table->text('address');
            $table->unsignedBigInteger('agent_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('agent_id')
                    ->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lodges');
    }
}
