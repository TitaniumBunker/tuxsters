<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Competition;

class CompetitionTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('competitions')->delete();

		// TestData
		Competition::create(array(
				'name' => 'Tuxsters 2014',
				'submissionStartDate' => date('2014-01-01'),
				'submissionEndDate' => date('2014-06-30'),
				'votingStartDate' => date('2014-07-01'),
				'votingEndDate' => date('2014-12-31'),
				'description' => 'This is the sample Tuxsters 2014 competition'
			));
	}
}
