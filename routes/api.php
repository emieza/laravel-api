<?php

use Illuminate\Http\Request;
use App\Preu;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ping', function(Request $request) {
    return "pong! :)";
});

Route::get('/barri/{barri}', function(Request $request, $barri) {
	// retorna les sèries de preus per barris
	$preusbarri = Preu::select("barri","districte","any","semestre","preu")->where('barri','like',"%".$barri."%")->orderBy("any","semestre")->get();
    return response()->json( $preusbarri );
});

Route::get('/barris', function(Request $request) {
	// retorna llista de barris
	$barris = Preu::distinct()->select("barri","districte")->get();
    return response()->json( $barris );
});

