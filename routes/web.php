<?php

use Illuminate\Support\Facades\Route;

use App\Models\Clan;
use App\Models\Controls;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Carbon;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('auth.login');
	// $clansTemp = Clan::where('state', 1)->get();
	$clans = Clan::where('state', 1)->get();
	$today = Carbon::now()->format('Y-m-d');
	$totalDay = Controls::where('date', $today)->count();
	$limit = 50;
	// dd($clansTemp);
	// gettype($clansTemp);
	// dd(gettype($clansTemp));
	// consultar a la api para traer los members y algunos detalles mas de cada clan
	// $clansArray = [];
	// foreach($clansTemp as $clan){
	// 	$url = "https://cocproxy.royaleapi.dev" . '/v1/clans/%23'.$clan->tag;
	// 	$headers = [
    //         'Authorization' => 'Bearer '.env('API_KEY'),
    //         'Content-Type' => 'application/json',
    //     ];
		
	// 	$response = Http::withHeaders($headers)->get($url);
	// 	if ($response->successful()) {
    //         $datos = $response->json();
	// 		$arrayTemp = [
	// 			'id' => $clan->id,
	// 			'tag' => $datos['tag'],
	// 			'name' => $datos['name'],
	// 			'members' => $datos['members'],
	// 			'badge' => $datos['badgeUrls']['small']
	// 		];
	// 		$clansArray[$datos['tag']] = $arrayTemp;
    //     } else {
    //         $statusCode = $response->status();
    //         $mensajeError = $response->body();
    //     }
	// }
	// $clans = (object)$clansArray;
	return view('public.index', compact('clans', 'totalDay', 'limit'));
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

// Rutas Positions
Route::group(['middleware' => 'auth'], function () {
	Route::resource('positions', 'App\Http\Controllers\PositionController', ['except' => ['show']]);
});

// Rutas Clans
Route::group(['middleware' => 'auth'], function () {
	Route::resource('clans', 'App\Http\Controllers\ClanController', ['except' => ['show']]);

	Route::get('clans/war/{tag}', 'App\Http\Controllers\ClanController@war')->name('clans.war');
	Route::get('clans/capital/{tag}/{name}', 'App\Http\Controllers\ClanController@capital')->name('clans.capital');

	
});

// Rutas Members
Route::group(['middleware' => 'auth'], function () {
	Route::resource('members', 'App\Http\Controllers\ClanController', ['except' => ['show']]);

	// Route::get('members/war/{tag}', 'App\Http\Controllers\ClanController@war')->name('members.war');
	// Route::get('members/capital/{tag}/{name}', 'App\Http\Controllers\ClanController@capital')->name('members.capital');

	
});

Route::post('clans/capital/information', 'App\Http\Controllers\ClanController@capitalPublic')->name('clans.capitalPublic');
Route::post('clans/cwl/information', 'App\Http\Controllers\ClanController@cwlPublic')->name('clans.cwlPublic');
Route::post('clans/war/information', 'App\Http\Controllers\ClanController@warPublic')->name('clans.warPublic');

Route::resource('controls', 'App\Http\Controllers\ControlController', ['except' => ['show']]);