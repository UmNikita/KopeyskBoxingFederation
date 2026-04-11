<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $fillable = ['name', 'secondname', 'thirstname', 'description', 'birthday', 'expirience', 'avatar_root'];
}
