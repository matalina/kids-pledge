<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('chores', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('chore');
            $table->integer('points');
            $table->timestamps();
        });

        Schema::create('chores_users',function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id', false, true);
            $table->integer('chore_id', false, true);
            $table->boolean('week_day_end')->default(1);
            $table->tinyInteger('alternating')->default(2);
            $table->timestamps();
        });

        Schema::create('users_checklist', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id', false, true);
            $table->integer('chore_id', false, true);
            $table->timestamps();
        });

        Schema::create('money',function (Blueprint $table)
        {
            $table->increments('id');
            $table->boolean('debit_credit')->default(1);
            $table->decimal('amount',8,2);
            $table->integer('user_id', false, true);
            $table->integer('added_by', false, true);
            $table->timestamps();
        });

        Schema::create('allowances', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('category');
            $table->decimal('percent',3,2);
            $table->timestamps();
        });

        Schema::create('punishments', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('punishment');
            $table->integer('get_back_pts');
            $table->timestamps();
        });

        Schema::create('punishments_users', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('punishment_id', false, true);
            $table->integer('user_id', false, true);
            $table->date('get_back_by');
            $table->integer('points_earned');
            $table->date('completed_on');
            $table->timestamps();
        });

        Schema::create('chores_punishments',function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('chore_id', false, true);
            $table->integer('punishment_id', false, true);
            $table->integer('user_id', false, true);
        });

        Schema::create('settings', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('setting');
            $table->boolean('for_all')->default(0);
            $table->timestamps();
        });

        Schema::create('users_settings', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id', false, true);
            $table->integer('setting_id', false, true);
            $table->string('value');
            $table->timestamps();
        });

        Schema::create('events', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id', false, true);
            $table->integer('added_by', false, true);
            $table->dateTime('date_of_event');
            $table->string('duration');
            $table->string('event');
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
		Schema::drop('chores');
        Schema::drop('chores_users');
        Schema::drop('users_checklist');
        Schema::drop('money');
        Schema::drop('allowance');
        Schema::drop('punishments');
        Schema::drop('punishments_users');
        Schema::drop('settings');
        Schema::drop('users_settings');
        Schema::drop('events');
	}

}
