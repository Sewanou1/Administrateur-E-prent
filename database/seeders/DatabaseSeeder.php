<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $adminGeneral= Role::create(['name'=>'adminGeneral']);
        $adminCentre= Role::create(['name'=>'adminCentre']);
        User::find(1)->assignRole($adminGeneral);

    }
}
