<?php 

namespace App\Controllers;


use App\Base\Controller;
use App\Models\User;

class WellcomeControllers extends Controller{

	public function index()
	{
		$user = new User();
		$users = $user->get();

		return views('Frontend/index.php', compact('users'));
	}
}