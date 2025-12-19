<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_modules')
            ->withPivot('is_active')
            ->withTimestamps();
    }
}
