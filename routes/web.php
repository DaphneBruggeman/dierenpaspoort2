<?php

use App\Http\Controllers\DierenController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

require __DIR__.'/auth.php';


//
// Admin routes
//

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dieren/create', [DierenController::class, 'create'])
        ->name('dieren.create');

    Route::get('/dieren/{animal}/edit', [DierenController::class, 'edit'])
        ->name('dieren.edit');

    Route::put('/dieren/{animal}', [DierenController::class, 'update'])
        ->name('dieren.update');

    Route::delete('/dieren/{animal}', [DierenController::class, 'destroy'])
        ->name('dieren.destroy');

    Route::post('/dieren', [DierenController::class, 'store'])
        ->name('dieren.store');

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    Route::get('/admin/dieren', [DierenController::class, 'adminIndex'])
        ->name('admin.dieren.index');

    Route::get('/admin/qr-codes', function () {
        $animals = \App\Models\Animal::all();

        return view('admin.qr-codes', compact('animals'));
    })->name('admin.qr-codes');

    Route::get('/admin/qr-codes/{animal}/download', function (\App\Models\Animal $animal) {

        return response(
            QrCode::format('svg')
                ->size(500)
                ->generate(route('dieren.show', [
                    'soort' => Str::slug($animal->soort),
                    'animal' => $animal->slug
                ]))
        )
            ->header('Content-Type', 'image/svg+xml')
            ->header(
                'Content-Disposition',
                'attachment; filename="QR-'.$animal->naam.'.svg"'
            );

    })->name('admin.qr-download');

});

Route::get('/', function () {
    return redirect()->route('dieren.index');
});

Route::get('/dieren', [DierenController::class, 'index'])
    ->name('dieren.index');

Route::get('/dieren/soort/{soort}', [DierenController::class, 'filter'])
    ->name('dieren.filter');

Route::get('/dieren/{soort}/{animal}', [DierenController::class, 'show'])
    ->name('dieren.show');
