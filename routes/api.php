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
	echo $barri."\n";
	$preusbarri = Preu::select("barri","districte","any","semestre","preu")->where('barri','like',"%".$barri."%")->orderBy("any","semestre")->get();
	foreach( $preusbarri as $preu ) {
		echo $preu."\n";
	}
	//echo $preusbarri;
    //return response()->json( $preusbarri );
});

