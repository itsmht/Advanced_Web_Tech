<?php
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
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

Route::get('/', [StudentController::class,'reg'])->name("students.reg");
Route::post('/students.reg',[StudentController::class,'regSubmit'])->name('students.reg.submit');
Route::get('/students/list',[StudentController::class,'list'])->name("students.list");
Route::get('/students.details/{id}', [StudentController::class, 'details'])->name('students.details');
Route::get('/students.otp.verify',[EmailController::class,'sendMail'])->name('students.otp.verify');