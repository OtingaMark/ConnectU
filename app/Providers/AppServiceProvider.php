<?php

namespace App\Providers;

use App\Models\Module;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public const HOME = '/dashboard';

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        User::created(function (User $user) {
            // Create base profile
            Profile::create(['user_id' => $user->id]);

            // Attach default modules
            $defaultModules = Module::where('enabled_by_default', true)
                ->where('is_enabled', true)
                ->pluck('id');

            $rows = $defaultModules->map(fn ($moduleId) => [
                'user_id' => $user->id,
                'module_id' => $moduleId,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ])->all();

            DB::table('user_modules')->insert($rows);
        });
    }
}
