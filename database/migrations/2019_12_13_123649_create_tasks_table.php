<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('task_name');
            $table->boolean('done')->default(0);
            $table->timestamps();
        });
    }
    // DB::connection('mysql')->table('tasks')->insert([
    //     [
    //         'task_name' => 'doing homework',
    //         'done' => '0',
           
    //     ],
    //     [
    //         'task_name' => 'walking whit the dog',
    //         'done' => '0',
    //     ],
    //     [
    //         'task_name' => 'developer progect about task',
    //         'done' => '1',
    //     ]
       
    // ]);
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
