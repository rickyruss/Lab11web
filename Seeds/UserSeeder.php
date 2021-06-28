<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel'); 
		$model->insert([ 
			'username' => 'ricky', 
			'useremail' => 'ricky@email.com', 
			'userpassword' => password_hash('ricky123', PASSWORD_DEFAULT), 
			]);
	}
}
