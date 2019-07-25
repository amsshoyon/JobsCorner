<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function Job()
	{
		return $this->belongsTo(Job::class);
    }

    public function User()
	{
		return $this->belongsTo(User::class);
    }
}
