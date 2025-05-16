<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Login extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'user_id');
    }
}
