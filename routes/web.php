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

route::get('/events/create', [HomeControler::class, 'create'])->middleware('auth');
route::get('/events/{id}', [HomeControler::class, 'show']);
route::delete('/events/{id}',[HomeControler::class,'destroy'])->middleware('auth');
route::get('/events/edit/{id}', [HomeControler::class, 'edit'])->middleware('auth');
route::put('/events/update/{id}', [HomeControler::class, 'update'])->middleware('auth');

route::post('/events', [HomeControler::class, 'store']);

route::get('/dashboard', [HomeControler::class, 'dashboard'])->middleware('auth');
