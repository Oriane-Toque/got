<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{

  public function title()
  {

    return $this->belongsTo(Title::class, 'id_title');
  }

  public function mother() {

    return $this->belongsTo(Character::class)->where('mother_id', $this->id);
  }

  public function father() {

    return $this->belongsTo(Character::class)->where('father_id', $this->id);
  }

  public function house() {
    return $this->belongsToMany(House::class, 'house_has_characters', 'character', 'house');
  }
}
