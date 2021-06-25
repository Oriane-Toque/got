<?php

namespace App\Http\Controllers;

use App\Models\Character;
use DB;

class CharacterController extends Controller
{

  public function character(int $id)
  {
    $character = Character::find($id)->load('title','mother', 'father');

    return $this->sendJsonResponse($character);
  }
}
