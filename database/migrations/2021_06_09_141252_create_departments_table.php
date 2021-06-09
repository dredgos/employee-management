<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('department_name')->nullable();
            $table->string("address_1", 255)->nullable();
            $table->string("address_2", 255)->nullable();
            $table->string("town", 255)->nullable();
            $table->string("postcode", 255)->nullable();
            $table->integer('department_head_id')->nullable();
            $table->timestamps();
        });

        Schema::create('department_role', function (Blueprint $table) {
            $table->id();

            $table->foreignId("department_id")
                ->constrained()
                ->onDelete("cascade");
        
            $table->foreignId("role_id")
                ->constrained()
                ->onDelete("cascade");

                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department_role');
        Schema::dropIfExists('departments');
    }
}
