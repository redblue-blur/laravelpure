<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Models\Customer;

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


Route::get('/register', [RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);
Route::get('/customer/delete/{id}',[RegistrationController::class, 'delete'])->name('customer.delete');
Route::get('/customer/edit/{id}',[RegistrationController::class, 'edit'])->name('customer.edit');
Route::get('/customer/update/{id}',[RegistrationController::class, 'updatee'])->name('customer.update');
Route::get('/customer/view', [RegistrationController::class, 'view']);
Route::get('/customer', function () {
    $customers = Customer::all();
    echo "<pre>";
    print_r($customers->toArray());
});
Route::get('/{name?}', function ($name = null) {
    $data =compact('name');
    return view('home')->with($data);
});
