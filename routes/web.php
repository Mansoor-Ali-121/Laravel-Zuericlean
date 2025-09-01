<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

// Website Routes
Route::get('/',[WebController::class,'index'])->name('website');
Route::get('/about/us/',[WebController::class,'about_us'])->name('about.us');
Route::get('/about/us/storyline',[WebController::class,'about_us_storyline'])->name('about.us.storyline');
Route::get('/about/us/philosophy',[WebController::class,'about_us_philosophy'])->name('philosophy');
Route::get('/about/us/imprint',[WebController::class,'about_us_imprint'])->name('imprint');
Route::get('/about/us/our/team',[WebController::class,'our_team'])->name('our.team');
Route::get('/about/us/responsibility',[WebController::class,'responsibility'])->name('responsibility');
Route::get('contact/us',[WebController::class,'contact_us'])->name('contact.us');
Route::get('/all/services',[WebController::class,'all_services'])->name('all.services');
Route::get('cleaning/handover',[WebController::class,'cleaning_handover'])->name('cleaning.handover');
Route::get('cleaning/page',[WebController::class,'cleaning_page'])->name('cleaning.page');
Route::get('/booking',[WebController::class,'booking'])->name('booking');
Route::get('/office/shop/cleaning',[WebController::class,'office_shop_cleaning'])->name('office.shop');
Route::get('/blogs',[WebController::class,'blogs'])->name('blogs');
Route::get('/blogs/details',[WebController::class,'blogs_details'])->name('blogs.details');
Route::get('/city/services',[WebController::class,'city_services'])->name('city.services');
Route::get('/cleaning/services',[WebController::class,'cleaning_services'])->name('cleaning.services');




