<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('class_time_id');
            $table->string('status')->default(1);
            $table->string('day')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();

            $table->foreign('subject_id')->references('id')->on('subjects')
                ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('class_time_id')->references('id')->on('class_times')
                ->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('routines');
    }
}
