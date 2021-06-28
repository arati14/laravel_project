<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\MainController;
use App\Models\Department;
use App\Models\Employee;
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
Route::resource('employee','App\Http\Controllers\EmployeeController');
 Route::resource('department','App\Http\Controllers\DepartmentController');
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/create', [MainController::class,'create']);  
Route::get('/show',[EmployeeController::class,'show']);
Route::post('/dept/create',[DepartmentController::class,'store']);
Route::get('/dept/form',[DepartmentController::class,'index']);
Route::get('/mainPage',[MainController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create/dept',function(){
    return view('departmentForm');
});
//hasmany to fetch the employee details on the basis of the department name 
// Route::get('/',function(){
//     // $var=3;
//     // $dept=Department::with('employees')->where('id',$var)->first();
//     // return [
//     //     "result"=>$dept->employees];
    
//     return Department::find(2)->employees;
// });
// Route::get('/dept/delete/{id}',[DepartmentController::class,'destroy'])->middleware('checkDept');