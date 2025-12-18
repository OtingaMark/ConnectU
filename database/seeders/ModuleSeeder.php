<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            [
                'slug' => 'study',
                'name' => 'Study Finder',
                'is_enabled' => true,
                'enabled_by_default' => true,
                'sort_order' => 1,
            ],
            [
                'slug' => 'faith',
                'name' => 'Faith & Bible Groups',
                'is_enabled' => true,
                'enabled_by_default' => true,
                'sort_order' => 2,
            ],
            [
                'slug' => 'projects',
                'name' => 'Projects & Teams',
                'is_enabled' => true,
                'enabled_by_default' => false,
                'sort_order' => 3,
            ],
            [
                'slug' => 'jobs',
                'name' => 'Jobs & Referrals',
                'is_enabled' => true,
                'enabled_by_default' => false,
                'sort_order' => 4,
            ],
            [
                'slug' => 'dating',
                'name' => 'Dating (Locked)',
                'is_enabled' => false,
                'enabled_by_default' => false,
                'sort_order' => 99,
            ],
        ];

        foreach ($modules as $m) {
            DB::table('modules')->updateOrInsert(
                ['slug' => $m['slug']],
                array_merge($m, ['updated_at' => now(), 'created_at' => now()])
            );
        }
    }
}
