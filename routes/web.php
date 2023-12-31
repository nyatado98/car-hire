<?php

use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//user index page
Route::get('/', function () {
    $cars = DB::select("SELECT * FROM cars WHERE car_type = '4X4'");
        return view('index',compact('cars'));
    // return view('index');
});
//login route
Route::get('login',function(){
    return view('login');
});
//register route
Route::get('register',function(){
    return view('admin/register');
});
//admin home page
// Route::get('/admin/index',function(){
//     return view('/admin/index');
// });
//home when loggedin
//changed from
// Route::get('/', [CarsController::class, 'index']); 
// to
Route::get('admin/index', [CarsController::class, 'index']); 

Route::get('brands', [CarsController::class, 'brand']);
Route::get('types', [CarsController::class, 'Types']);
Route::get('listings', [CarsController::class, 'Listing']);
Route::get('admin/transactions', [CarsController::class, 'Transaction'])->middleware(App\Http\Middleware\AuthCheck::class);
Route::get('admin/clients', [CarsController::class, 'Clients'])->middleware(App\Http\Middleware\AuthCheck::class);
Route::get('setting', [CarsController::class, 'Setting']);
Route::get('profile', [CarsController::class, 'Profile']);
//login
Route::get('admin/login', [CarsController::class, 'Login']);
//register
Route::get('admin/register', [CarsController::class, 'register']);
//logout
Route::get('logout',[CarsController::class, 'Logout']);
//all bookings
Route::get('admin/bookings',[CarsController::class, 'all_bookings']);
//charts page
Route::get('admin/charts',[CarsController::class, 'charts']);
//4x4 contents
Route::get('4X4s',[CarsController::class, 'power']);
//saloon contents
Route::get('saloons',[CarsController::class, 'saloon']);
//trucks contents
Route::get('trucks',[CarsController::class, 'truck']);
//saloon contents
Route::get('bikes',[CarsController::class, 'bike']);
//proceed to bookings page
Route::get('bookings/{car_name}',[CarsController::class, 'bookings']);
//paersonal details page
Route::get('proceed/personal-details/{id}',[CarsController::class, 'details']);
//capture clients details
Route::post('user/register/{id}',[CarsController::class, 'client_gister']);
//summary page
Route::get('summary',function(){
    return view('summary');
});
//my bookings page
Route::get('bookings',[CarsController::class, 'my_bookings']);
//payment page
Route::post('proceed/payment/{id}',[CarsController::class, 'payment']);
//complete payment
Route::post('complete/payment',[CarsController::class, 'submit']);
//find booking
Route::post('client/search',[CarsController::class, 'my_bookings']);
//modal status
Route::get('modal/{booking_id}',[CarsController::class,'modal']);
//filter bookings
Route::post('admin/index',[CarsController::class, 'filter'])->name('admin.index');
//add new cars into the database
Route::post('admin/add',[CarsController::class, 'add'])->name('admin.add');
//appprove booking
Route::get('admin/approve/{booking_id}',[CarsController::class, 'approve'])->name('admin/approve/{booking_id}');
//cancel booking
Route::get('admin/cancel/{booking_id}',[CarsController::class, 'cancel'])->name('admin/cancel/{booking_id}');

