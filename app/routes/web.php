<?php

use App\Http\Controllers\CountyController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [HomeController::class, 'dashboard'] ) 
->name('dashboard');

Route::get('/counties','App\\Http\\Controllers\\CountyController@index')
    ->name('counties.index');
Route::get('/municipalities','App\\Http\\Controllers\\municipalityController@index')
->name('municipalities.index');

Route::get('/users','App\\Http\\Controllers\\userController@index')
->name('users.index');

Route::get('/places','App\\Http\\Controllers\\placeController@index')
->name('places.index');

Route::get('/traffic_violations','App\\Http\\Controllers\\trafficviolationController@index')
->name('traffic_violations.index');

Route::get('/police_officers','App\\Http\\Controllers\\policeofficerController@index')
->name('police_officers.index');

Route::get('/police_stations','App\\Http\\Controllers\\policestationController@index')
->name('police_stations.index');

Route::get('/offenses','App\\Http\\Controllers\\offenseController@index')
->name('offenses.index');