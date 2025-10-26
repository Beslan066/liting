<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Frontend\IndexController::class, 'index'])->name('frontend.index');
Route::get('/poesy', [\App\Http\Controllers\Frontend\IndexController::class, 'poesy'])->name('frontend.poesy.index');
Route::get('/poesy/{poesy}', [\App\Http\Controllers\Frontend\IndexController::class, 'poesySingle'])->name('frontend.poesy.single');
Route::get('/prose', [\App\Http\Controllers\Frontend\IndexController::class, 'prose'])->name('frontend.prose.index');
Route::get('/prose/{prose}', [\App\Http\Controllers\Frontend\IndexController::class, 'proseSingle'])->name('frontend.prose.single');
Route::get('/plays', [\App\Http\Controllers\Frontend\IndexController::class, 'plays'])->name('frontend.plays.index');
Route::get('/plays/{play}', [\App\Http\Controllers\Frontend\IndexController::class, 'playSingle'])->name('frontend.plays.single');
Route::get('/jubilees', [\App\Http\Controllers\Frontend\IndexController::class, 'jubilees'])->name('frontend.jubilees.index');
Route::get('/jubilees/{jubilee}', [\App\Http\Controllers\Frontend\IndexController::class, 'jubileeSingle'])->name('frontend.jubilees.single');
Route::get('/authors', [\App\Http\Controllers\Frontend\IndexController::class, 'authors'])->name('frontend.authors');
Route::get('/authors/{author}', [\App\Http\Controllers\Frontend\IndexController::class, 'authorSingle'])->name('frontend.authorSingle');
Route::get('/archive', [\App\Http\Controllers\Frontend\IndexController::class, 'archive'])->name('frontend.archive');
Route::get('/about', [\App\Http\Controllers\Frontend\IndexController::class, 'about'])->name('frontend.about');
Route::get('/contacts', [\App\Http\Controllers\Frontend\IndexController::class, 'contact'])->name('frontend.contact');


Route::group(['namespace' => 'App\Http\Controllers\Admin', 'middleware' => 'auth'], function () {
    Route::get('/admin', [\App\Http\Controllers\Admin\IndexController::class, 'index'])->name('admin.index');

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/authors', [\App\Http\Controllers\Admin\AuthorController::class, 'index'])->name('admin.authors.index');
        Route::get('/authors/create', [App\Http\Controllers\Admin\AuthorController::class, 'create'])->name('admin.authors.create');
        Route::post('/authors/store', [App\Http\Controllers\Admin\AuthorController::class, 'store'])->name('admin.authors.store');
        Route::get('/authors/{author}/edit', [App\Http\Controllers\Admin\AuthorController::class, 'edit'])->name('admin.authors.edit');
        Route::patch('/authors/{author}', [App\Http\Controllers\Admin\AuthorController::class, 'update'])->name('admin.authors.update');
        Route::delete('/authors/{author}', [App\Http\Controllers\Admin\AuthorController::class, 'destroy'])->name('admin.authors.delete');
    });

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/jubilees', [\App\Http\Controllers\Admin\JubileeController::class, 'index'])->name('admin.jubilees.index');
        Route::get('/jubilees/create', [App\Http\Controllers\Admin\JubileeController::class, 'create'])->name('admin.jubilees.create');
        Route::post('/jubilees/store', [App\Http\Controllers\Admin\JubileeController::class, 'store'])->name('admin.jubilees.store');
        Route::get('/jubilees/{jubilee}/edit', [App\Http\Controllers\Admin\JubileeController::class, 'edit'])->name('admin.jubilees.edit');
        Route::patch('/jubilees/{jubilee}', [App\Http\Controllers\Admin\JubileeController::class, 'update'])->name('admin.jubilees.update');
        Route::delete('/jubilees/{jubilee}', [App\Http\Controllers\Admin\JubileeController::class, 'destroy'])->name('admin.jubilees.delete');
    });

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/play', [\App\Http\Controllers\Admin\PlayController::class, 'index'])->name('admin.play.index');
        Route::get('/play/create', [App\Http\Controllers\Admin\PlayController::class, 'create'])->name('admin.play.create');
        Route::post('/play/store', [App\Http\Controllers\Admin\PlayController::class, 'store'])->name('admin.play.store');
        Route::get('/play/{play}/edit', [App\Http\Controllers\Admin\PlayController::class, 'edit'])->name('admin.play.edit');
        Route::patch('/play/{play}', [App\Http\Controllers\Admin\PlayController::class, 'update'])->name('admin.play.update');
        Route::delete('/play/{play}', [App\Http\Controllers\Admin\PlayController::class, 'destroy'])->name('admin.play.delete');
    });

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/poesy', [\App\Http\Controllers\Admin\PoesyController::class, 'index'])->name('admin.poesies.index');
        Route::get('/poesy/create', [App\Http\Controllers\Admin\PoesyController::class, 'create'])->name('admin.poesies.create');
        Route::post('/poesy/store', [App\Http\Controllers\Admin\PoesyController::class, 'store'])->name('admin.poesies.store');
        Route::get('/poesy/{author}/edit', [App\Http\Controllers\Admin\PoesyController::class, 'edit'])->name('admin.poesies.edit');
        Route::patch('/poesy/{author}', [App\Http\Controllers\Admin\PoesyController::class, 'update'])->name('admin.poesies.update');
        Route::delete('/poesy/{author}', [App\Http\Controllers\Admin\PoesyController::class, 'destroy'])->name('admin.poesies.delete');
        Route::delete('/poesy/{author}', [App\Http\Controllers\Admin\PoesyController::class, 'destroy'])->name('admin.poesies.delete');
    });

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/prose', [\App\Http\Controllers\Admin\ProseController::class, 'index'])->name('admin.proses.index');
        Route::get('/prose/create', [App\Http\Controllers\Admin\ProseController::class, 'create'])->name('admin.proses.create');
        Route::post('/prose/store', [App\Http\Controllers\Admin\ProseController::class, 'store'])->name('admin.proses.store');
        Route::get('/prose/{prose}/edit', [App\Http\Controllers\Admin\ProseController::class, 'edit'])->name('admin.proses.edit');
        Route::patch('/prose/{prose}', [App\Http\Controllers\Admin\ProseController::class, 'update'])->name('admin.proses.update');
        Route::delete('/prose/{prose}', [App\Http\Controllers\Admin\ProseController::class, 'destroy'])->name('admin.proses.delete');
    });
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
