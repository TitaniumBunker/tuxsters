<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
				'name' => 'Administrator',
				'email' => 'computa_mike@hotmail.com',
				'password' => bcrypt('password'),
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")
		]);

		// $this->call('UserTableSeeder');
	}

}
