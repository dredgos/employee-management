<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string("telephone")->nullable();
            $table->string("address_1", 255)->nullable();
            $table->string("address_2", 255)->nullable();
            $table->string("town", 255)->nullable();
            $table->string("postcode", 255)->nullable();
            $table->string('email')->unique();
            $table->integer('total_holiday_days')->default(28)->nullable();
            $table->integer('total_training_days')->default(14)->nullable();
            $table->date('join_date')->nullable();
            $table->integer('salary')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('isAdmin')->default(false);
            $table->boolean('isSuperAdmin')->default(false);
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
        Schema::dropIfExists('users');
    }
}
