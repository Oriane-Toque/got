<?php

namespace App\Http\Controllers;

use App\Models\Character;
use DB;

class MainController extends Controller {

    public function home() {

        $character = Character::all();

        return $this->sendJsonResponse($character);
    }
}
