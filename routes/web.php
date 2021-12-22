<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\HomeControler;

route::get('/', [HomeControler::class, 'index']);

route::get('/events/create', [HomeControler::class, 'create']);
route::get('/events/{id}', [HomeControler::class, 'show']);

route::post('/events', [HomeControler::class, 'store']);