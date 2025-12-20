<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Models\Module;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/onboarding', function () {
        return view('onboarding');
    })->name('onboarding');

    Route::post('/onboarding', function () {
        $user = Auth::user();
        $selected = request('modules', []);

        // Clear current selections
        DB::table('user_modules')->where('user_id', $user->id)->delete();

        // Attach selected modules by slug
        $moduleIds = Module::whereIn('slug', $selected)->pluck('id');

        foreach ($moduleIds as $moduleId) {
            DB::table('user_modules')->insert([
                'user_id' => $user->id,
                'module_id' => $moduleId,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect()->route('dashboard');
    })->name('onboarding.save');
});

require __DIR__.'/auth.php';
