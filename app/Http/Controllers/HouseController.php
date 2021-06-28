<?php

namespace App\Http\Controllers;

use App\Models\House;
use DB;

class HouseController extends Controller
{
  public function list()
  {
    $houseList = House::all();

    // return $this->sendJsonResponse($houseList);
    return view('houses', ['houseList' => $houseList]);
  }

  public function house(int $id) {
      $houseCharacters = House::find($id)->load('character');

      return view('house', ['house' => $houseCharacters]);
  }
}
