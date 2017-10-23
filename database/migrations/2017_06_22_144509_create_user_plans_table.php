<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('plan_id')->unsigned();
            $table->integer('delivery_slot_id')->unsigned();
            $table->integer('plan_duration_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('plan_id')
                ->references('id')->on('subscription_plans')
                ->onDelete('cascade');
            $table->foreign('delivery_slot_id')
                ->references('id')->on('delivery_slots')
                ->onDelete('cascade');
            $table->foreign('plan_duration_id')
                ->references('id')->on('plan_durations')
                ->onDelete('cascade');
            $table->enum('status', ['active', 'inactive'])->default('inactive');
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
        Schema::dropIfExists('user_plans');
    }
}
