<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{

  public function title()
  {

    return $this->belongsTo('App\Models\Title', 'id_title');
  }
}
