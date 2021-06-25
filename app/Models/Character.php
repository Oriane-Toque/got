<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{

  public function title()
  {

    return $this->belongsTo('App\Models\Title', 'id_title');
  }

  public function mother() {

    return $this->belongsTo('App\Models\Character')->where('mother_id', $this->id);
  }

  public function father() {

    return $this->belongsTo('App\Models\Character')->where('father_id', $this->id);
  }
}
