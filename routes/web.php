<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\MemberController;
use Illuminate\Http\Response;

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
    return view('welcome');
});

Route::get('/hello', function () {
    $bugsang = config('services.bugsang.key');

    var_dump($bugsang);

    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/helloworld', function () {
//     return view('helloworld');
// });

Route::get('/helloworld', [HelloWorldController::class, 'index']);

Route::get('/travellist', function () {
    return view('travellist');
});

Route::get('/kirameiger', function () {
    return view('kirameiger');
});

Route::get('/orders', [OrdersController::class, 'store']);

Route::any('/kirameiger/{id}/{var}', function () {
    return view('kirameiger');
})
->where('id', '[0-9]+')
->where('var', '[A-Za-z]+');

Route::match(['get', 'post'], '/kirameiger/{id}', function () {
    return view('kirameiger');
});

Route::get('/members/{id}', [MemberController::class, 'show'])->name('members.show');

Route::get('/set-cookie', function () {
    $response = new Response('Hello, World!');
    $response->withCookie(cookie('name', 'value', $minutes = 60));

    return $response;
});

// header('Set-Cookie: PHPSESSID=WillThisWork?'); 를 처리하는 방법
Route::get('/set-custom-session-cookie', function () {
    $response = new Response('Hello, World!');
    $response->withCookie(cookie('PHPSESSID', 'WillThisWork?', $minutes = 60));

    return $response;
});
