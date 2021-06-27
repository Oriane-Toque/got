<?php


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//**? ROUTE HOMEPAGE ?**/
$router->get(
  '/',
  [
    'uses' => 'MainController@home',
    'as'   => 'homepage'
  ]
);

//**? ROUTE CHARACTER PAGE ?**/
$router->get(
    '/character/{id}',
    [
      'uses' => 'CharacterController@character',
      'as'   => 'character'
    ]
);

//**? ROUTE HOUSE PAGE ?**/
$router->get(
    '/house',
    [
      'uses' => 'HouseController@list',
      'as'   => 'house-list-page'
    ]
);
