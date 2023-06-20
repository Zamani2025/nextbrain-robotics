<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\BlogComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\EventsComponent;
use App\Http\Livewire\FallbackComponent;
use App\Http\Livewire\GalleryComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\RegisterComponent;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ExecutivesController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RegisterUserController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeComponent::class)->name("home");
Route::get('/contact', ContactComponent::class)->name("contact");
Route::get('/about-us', AboutComponent::class)->name("about");
Route::get('/blog', BlogComponent::class)->name("blog");
Route::get('/gallery', GalleryComponent::class)->name("gallery");
Route::get('/events', EventsComponent::class)->name("event");
Route::get('/user/register', RegisterComponent::class)->name("user.register");


//Admin Middleware
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    "admin"
])->group(function () {
    //Admin Dashboard Route
    Route::get('admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    //Executives Routes
    Route::get('admin/executives', [ExecutivesController::class, "index"])->name("executives.index");
    Route::get('admin/executives/create', [ExecutivesController::class, "create"])->name("executives.create");
    Route::post('admin/executives/store', [ExecutivesController::class, "store"])->name("executives.store");
    Route::get('admin/executives/{id}/edit', [ExecutivesController::class, "edit"])->name("executives.edit");
    Route::patch('admin/executives/{id}', [ExecutivesController::class, "update"])->name("executives.update");
    Route::delete('admin/executives/{id}', [ExecutivesController::class, "destroy"])->name("executives.destroy");

    //Gallery Routes
    Route::get("admin/gallery", [GalleryController::class, 'index'])->name("gallery.index");
    Route::get("admin/gallery/create", [GalleryController::class, 'create'])->name("gallery.create");
    Route::post("admin/gallery/store", [GalleryController::class, 'store'])->name("gallery.store");
    Route::delete("admin/gallery/{id}", [GalleryController::class, 'destroy'])->name("gallery.destroy");
    
    //Register Users Routes
    Route::get("admin/registeredUsers", [RegisterUserController::class, 'index'])->name("users.index");
    
    
    //Events Routes
    Route::get("admin/event", [EventsController::class, 'index'])->name("event.index");
    Route::get("admin/event/create", [EventsController::class, 'create'])->name("event.create");
});


//Fallback Route
Route::fallback(FallbackComponent::class);
