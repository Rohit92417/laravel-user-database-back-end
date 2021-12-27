<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeDataController;

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


Route::get('/',[EmployeeDataController::class,'get']);


Route::post('/add',[EmployeeDataController::class,'createEmployee']);
Route::get('/employee/{id}',[EmployeeDataController::class,'getEmployee']);
Route::put('/update/{id}',[EmployeeDataController::class,'updateEmployee']);
Route::delete('/delete/{id}',[EmployeeDataController::class,'deleteEmployee']);
Route::get('/employees',[EmployeeDataController::class,'getAllEmployees']);
