<?php

declare(strict_types=1);

use TPHST\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	/**
	 * Auto generated seed file.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create([
			'name' => 'Admin',
			'email' => 'webmaster@sarltphst.com',
			'password' => bcrypt('password'),
			'remember_token' => str_random(60),
		]);
	}
}
