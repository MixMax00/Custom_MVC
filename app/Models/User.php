<?php

namespace App\Models;

use App\Base\Model;

class User extends Model
{
	protected string $tableName = "users";
	public function get()
	{
		return $this->fetchAll("SELECT * FROM {$this->tableName}");
	}

}

