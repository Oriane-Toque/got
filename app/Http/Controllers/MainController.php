<?php

namespace App\Http\Controllers;

use App\Models\Character;
use DB;

class MainController extends Controller {

    public function home() {

        $characterList = Character::all()->load('house');

        // return $this->sendJsonResponse($character);

        return view('homepage', ['characterList' => $characterList]);
    }
}
