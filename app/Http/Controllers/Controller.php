<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Character;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
  protected function sendJsonResponse($data, $httpStatusCode = 200)
  {
    return response()->json($data, $httpStatusCode);
  }

  protected function sendEmptyResponse($httpStatusCode = 200)
  {
    return response('', $httpStatusCode);
  }
}
