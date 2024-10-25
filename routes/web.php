<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuestsController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Nursery;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    $users= User::all();
    $nurseries = Nursery::all();
    return view('welcome', compact('users','nurseries'));
});

Route::get('/nursaries', [GuestsController::class, 'getNursaries'])->name('nursaries.get');
Route::get('/land', [GuestsController::class, 'getLand'])->name('land.get');
Route::get('/team', [GuestsController::class, 'getTeam'])->name('team.get');
Route::post('/message', [GuestsController::class, 'message'])->name('team.message');
Route::get('/gallery', [GuestsController::class, 'getGallery'])->name('gallery.get');
Route::get('/contact', [GuestsController::class, 'getContact'])->name('contact.get');
Route::get('/gallery/nurseries', [GuestsController::class, 'getNurseryGallery'])->name('nurseries.gallery');
Route::get('/gallery/estates', [GuestsController::class, 'getEstatesGallery'])->name('estates.gallery');


Route::get('/product/id', [GuestsController::class, 'getProduct'])->name('product.get');



Route::middleware('auth')->group(function () {

    Route::post('register/user', [RegisteredUserController::class, 'add_user'])->name('add.user');
    Route::get('delete/{id}', [RegisteredUserController::class, 'delete_user'])->name('delete.user');
    Route::post('edit', [RegisteredUserController::class, 'edit_user'])->name('edit.user');

    
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/gallery/{name}', [AdminController::class, 'getNurseriesPhotos'])->name('nurseriesPhotos.get');
    Route::get('/admin/nurseries', [AdminController::class, 'getNurseries'])->name('nurseries.get');
    Route::get('/admin/messages', [AdminController::class, 'getMessages'])->name('messages.get');
    Route::get('/admin/emails', [AdminController::class, 'getEmails'])->name('emails.get');
    Route::get('/admin/team', [AdminController::class, 'getTeam'])->name('user.get');

    Route::post('/nurseries', [AdminController::class, 'createNurseies'])->name('nurseries.create');
    Route::post('/edit_nurseries', [AdminController::class, 'editNurseies'])->name('nurseries.update');
    Route::get('/delete_nurseries/{id}', [AdminController::class, 'deleteNurseies'])->name('nurseries.delete');


    Route::post('/add_photo', [AdminController::class, 'addPhoto'])->name('photo.add');
    Route::get('/admin/delete_photo/{id}/{name}', [AdminController::class, 'deletePhoto'])->name('photo.delete');


});





require __DIR__.'/auth.php';
