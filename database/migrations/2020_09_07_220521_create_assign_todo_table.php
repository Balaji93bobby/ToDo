<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignTodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_todo', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('todo_id')->constrained('todo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assign_todo');
    }
}
