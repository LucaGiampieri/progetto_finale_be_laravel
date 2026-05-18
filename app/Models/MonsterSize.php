<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonsterSize extends Model
{
    public function monsters()
    {
        return $this->hasMany(Monster::class);
    }
}
