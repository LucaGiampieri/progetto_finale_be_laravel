<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    public function types()
    {
        return $this->belongsToMany(
            MonsterType::class,
            'monster_monster_type',
            'monster_id',
            'monster_type_id'
        );
    }

    public function size()
    {
        return $this->belongsTo(MonsterSize::class, 'monster_size_id', 'id');
    }
}
