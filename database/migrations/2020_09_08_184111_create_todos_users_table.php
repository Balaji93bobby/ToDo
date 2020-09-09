<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos_users', function (Blueprint $table) {
            $table->bigIncrements('id');  
            $table->unsignedBigInteger('user_id');      
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('todo_id');
            $table->foreign('todo_id')
                  ->references('id')
                  ->on('todos')->onDelete('cascade');
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
        Schema::dropIfExists('todos_users');
    }
}
