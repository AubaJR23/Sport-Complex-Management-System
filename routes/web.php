<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MembershipController;

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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect', [HomeController::class, 'redirect']);
route::get('/', [HomeController::class, 'index']);
route::get('/booking', function () {
    return view('user.booking');
});
route::get('/product', [AdminController::class, 'product']);
route::get('/updatestaff', [AdminController::class, 'updatestaff']);
route::resource('addstaff', AdminController::class);
route::get('/stafflist', [AdminController::class, 'showstaff']);
route::get('/changestaff/{staff_id}', [AdminController::class, 'changestaff']);
route::get('/deletestaff/{staff_id}', [AdminController::class, 'deletestaff']);
route::get('/updatechangestaff/{staff_id}', [AdminController::class, 'updatechangestaff']);

route::get('/updatemaintenance', [MaintenanceController::class, 'updatemaintenance']);
route::resource('addmaintenance', MaintenanceController::class);
route::get('/maintenancelist', [MaintenanceController::class, 'showmaintenance']);
route::get('/changemaintenance/{facility_id}', [MaintenanceController::class, 'changemaintenance']);
route::get('/deletemaintenance/{facility_id}', [MaintenanceController::class, 'deletemaintenance']);
route::get('/updatechangemaintenance/{facility_id}', [MaintenanceController::class, 'updatechangemaintenance']);

route::get('/updatebooking', [BookingController::class, 'updatebooking']);
route::resource('addbooking', BookingController::class);
route::get('/bookinglist', [BookingController::class, 'showbooking']);
route::get('/changebooking/{booking_id}', [BookingController::class, 'changebooking']);
route::get('/deletebooking/{booking_id}', [BookingController::class, 'deletebooking']);
route::get('/updatechangebooking/{booking_id}', [BookingController::class, 'updatechangebooking']);

route::get('/updateequipment', [EquipmentController::class, 'updateequipment']);
route::resource('addequipment', EquipmentController::class);
route::get('/equipmentlist', [EquipmentController::class, 'showequipment']);
route::get('/changeequipment/{equipment_id}', [EquipmentController::class, 'changeequipment']);
route::get('/deleteequipment/{equipment_id}', [EquipmentController::class, 'deleteequipment']);
route::get('/updatechangeequipment/{equipment_id}', [EquipmentController::class, 'updatechangeequipment']);

route::get('/updatemembership', [MembershipController::class, 'updatemembership']);
route::resource('addmembership', MembershipController::class);
route::get('/membershiplist', [MembershipController::class, 'showmembership']);
route::get('/changemembership/{membership_id}', [MembershipController::class, 'changemembership']);
route::get('/deletemembership/{membership_id}', [MembershipController::class, 'deletemembership']);
route::get('/updatechangemembership/{membership_id}', [MembershipController::class, 'updatechangemembership']);

/* useless
route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);
route::get('/showproduct', [AdminController::class, 'showproduct']);
route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);
route::get('/updateview/{id}', [AdminController::class, 'updateview']);
route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct']);
route::get('/search', [HomeController::class, 'search']);
route::post('/addcart/{id}', [HomeController::class, 'addcart']);
route::get('/showcart', [HomeController::class, 'showcart']);
route::get('/delete/{id}', [HomeController::class, 'deletecart']);
route::post('/order', [HomeController::class, 'confirmorder']);
route::get('/showorder', [AdminController::class, 'showorder']);
route::get('/updatestatus/{id}', [AdminController::class, 'updatestatus']);
*/
