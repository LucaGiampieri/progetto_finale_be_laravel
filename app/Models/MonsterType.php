<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MonsterType extends Model
{
    public function monsters()
    {
        return $this->belongsToMany(
            Monster::class,
            'monster_monster_type',
            'monster_type_id',
            'monster_id'
        );
    }
}
