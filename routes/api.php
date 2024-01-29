<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/testear', function () {
    // return view('welcome');
    // $respuesta = json_encode({
    //     'mensaje': 'correcto'
    // });
    return response('correcto', 200);
});

Route::get('/datetimelocal', function () {
    $datelocal = date("d-m-Y");
    $timelocal = date("h:i:s");

    $resjson = [
        'datelocal' => $datelocal,
        'timelocal' => $timelocal
    ];
    
    $datetimelocal = $datelocal . '|' . $timelocal;
    
    // return response('correcto', 200);
    // return response()->json(json_encode($resjson), 200);
    return response($datetimelocal, 200);
});

Route::post('members', 'App\Http\Controllers\MemberController@store')->name('clans.war');
