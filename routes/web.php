<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\RentalRoomsController;
use App\Http\Controllers\LandController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\UserBaseController;
use GuzzleHttp\Middleware;
// Universal Routes for Non-Authencated Users
// Route::get('/',[dashboardController::class, 'welcome'])->name('welcome');
Route::get('/', function(){
    return view('jumping-to-index.rebuilt-index');
  });
  
 //auth route for  all user creator and admin
Route::group(['middleware' => ['auth']], function(){

    Route::get('/view/{id}',[dashboardController::class, 'view_single'])->name('view_single_room');
    Route::get('/addtocart',[dashboardController::class, 'addtocart'])->name('add_to_cart');
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
});

Route::group(['middleware'=>['auth', 'role:user']], function(){
    Route::get('/view',[dashboardController::class, 'view'])->name('landing_view');
    Route::get('/view/{id}',[dashboardController::class, 'view_single'])->name('view_single_room');
    Route::get('/rooms',[UserBaseController::class, 'view_rooms'])->name('rooms'); // different route ma url ma vako kura  eutai controller ma check garera pathauney 
    Route::get('/lands',[UserBaseController::class, 'view_lands'])->name('lands');
    Route::get('/houses',[UserBaseController::class, 'view_houses'])->name('houses');
    Route::get('/my_cart',[UserBaseController::class, 'my_cart'])->name('my_cart');
    Route::get('/add_to_cart/{id}',[UserBaseController::class, 'add_to_cart'])->name('add_to_cart');
    Route::get('/remove_from_cart/{id}',[UserBaseController::class, 'destroy'])->name('remove_from_cart');
    // Route::get('/dashboard/view_room',[RentalRoomsController::class, 'view_room'])->name('view_room');    
    // Route::get('/dashboard/new_room',[RentalRoomsController::class, 'create_room'])->name('create_room');
});

Route::group(['middleware'=>['auth', 'role:creator']], function(){
    Route::get('/dashboard/my-uploads',[RentalRoomsController::class, 'create'])->name('my-uploads');
    Route::get('/dashboard/view_room',[RentalRoomsController::class, 'view_room'])->name('view_room');    
    Route::get('/dashboard/new_room',[RentalRoomsController::class, 'create_room'])->name('create_room');
    Route::Post('/dashboard/room_upload',[RentalRoomsController::class, 'store_room'])->name('create_room_uploads');
    Route::get('/dashboard/update_propertyroom/{id}',[RentalRoomsController::class, 'update_room'])->name('update_room');
    Route::Post('/dashboard/update_propertyroom',[RentalRoomsController::class, 'update_room_data'])->name('update_room_data');

    Route::get('/dashboard/view_land',[LandController::class, 'view_land'])->name('view_land');
    Route::get('/dashboard/new_land',[LandController::class, 'create_land'])->name('create_land');
    Route::Post('/dashboard/land_upload',[LandController::class, 'store_land'])->name('create_land_uploads');
    Route::get('/dashboard/update_propertyland/{id}',[LandController::class, 'update_land'])->name('update_land');
    Route::Post('/dashboard/update_propertyland',[LandController::class, 'update_land_data'])->name('update_land_data');

    Route::get('/dashboard/view_house',[HouseController::class, 'view_house'])->name('view_house');
    Route::get('/dashboard/new_house',[HouseController::class, 'create_house'])->name('create_house');
    Route::Post('/dashboard/house_upload',[HouseController::class, 'store_house'])->name('create_house_uploads');
    Route::get('/dashboard/update_propertyhouse/{id}',[HouseController::class, 'update_house'])->name('update_house');
    Route::Post('/dashboard/update_propertyhouse',[HouseController::class, 'update_house_data'])->name('update_house_data');

    Route::get('/dashboard/trash',[RentalRoomsController::class, 'trash'])->name('trash_upload');
    Route::get('/dashboard/restore/{id}',[RentalRoomsController::class, 'restore'])->name('restore_upload');
    Route::get('/dashboard/del-my-uploads/{id}',[RentalRoomsController::class, 'destroy'])->name('delete_upload');
    Route::get('/dashboard/forcedelete/{id}',[RentalRoomsController::class, 'forcedelete'])->name('forcedelete_upload'); 
});



 //, 'role:creator']
//for users only
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard/profile', [dashboardController::class, 'profile'])->name('dashboard.profile');
});
// Route::get('/all',[insertioController::class, 'index'])->name('index');
// Route::get('/new',[insertioController::class, 'create'])->name('create');
// Route::Post('/new',[insertioController::class, 'store'])->name('store');
// Route::get('/delete/{id}',[insertioController::class, 'destroy'])->name('delete');
// Route::get('/restore/{id}',[insertioController::class, 'restore'])->name('restore');
// Route::get('/forcedelete/{id}',[insertioController::class, 'forcedelete'])->name('forcedelete');
// Route::get('/all/trash',[insertioController::class, 'trash'])->name('trash');




// layman Routes
// Route::get('/dashboard/new-upload',[dashboardController::class, 'new_uploads'])->name('new-upload');

require __DIR__.'/auth.php';
