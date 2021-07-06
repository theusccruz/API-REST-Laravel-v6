<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('jobs', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title');
      $table->longText('description');
      $table->string('local');
      $table->enum('remote', ['yes', 'no']);
      $table->integer('type')->nullable();
      $table->integer('user_id')->unsigned();
      $table->foreign('user_id')
        ->references('id')
        ->on('users')
        ->onDelete('cascade');
      $table->timestamps();
      $table->softDeletes();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('jobs');
  }
}
