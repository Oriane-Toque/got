<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    public function character() {
        return $this->belongsToMany(Character::class, 'house_has_characters', 'house', 'character');
    }
}
