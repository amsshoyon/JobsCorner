<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function User()
	{
		return $this->belongsTo(User::class);
    }

    public function Application()
    {
        return $this->hasMany(Application::class);
    }
}
