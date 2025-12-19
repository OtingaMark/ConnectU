<?php

namespace App\Listeners;

use App\Models\Module;
use App\Models\Profile;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class CreateUserDefaults
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event): void
    {
        $user = $event->user;

        // Create base profile (one per user)
        Profile::firstOrCreate(['user_id' => $user->id]);

        // Attach default modules (study + faith)
        $defaultModuleIds = Module::query()
            ->where('enabled_by_default', true)
            ->where('is_enabled', true)
            ->pluck('id');

        // Insert into pivot table if not already there
        foreach ($defaultModuleIds as $moduleId) {
            DB::table('user_modules')->updateOrInsert(
                ['user_id' => $user->id, 'module_id' => $moduleId],
                ['is_active' => true, 'created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}
