<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Supplies;
use App\Models\User;
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

Route::get('/supplieslist', function () {
    return App\Http\Resources\SuppliesResource::collection(Supplies::all());
})->middleware('auth:api');

Route::post('/login', function (Request $request) {
    $data = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response([
            'message' => ['These credentials do not match our records.']
        ], 404);
    }

    $token = $user->api_token;

    $response = [
        'user' => $user,
        'token' => $token
    ];

    return response($response, 201);
});
