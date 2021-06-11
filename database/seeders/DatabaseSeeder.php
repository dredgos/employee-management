<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Department::factory(5)->hasAttached(Role::factory(30))->create();
    }
}
