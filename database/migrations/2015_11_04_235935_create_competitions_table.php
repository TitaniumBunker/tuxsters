<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompetitionsTable extends Migration {

	public function up()
	{
		Schema::create('competitions', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->datetime('submissionStartDate');
			$table->datetime('submissionEndDate');
			$table->datetime('votingStartDate');
			$table->datetime('votingEndDate');
			$table->string('description');
		});
	}

	public function down()
	{
		Schema::drop('competitions');
	}
}