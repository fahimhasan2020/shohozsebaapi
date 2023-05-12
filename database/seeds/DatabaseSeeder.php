<?php

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
         $this->call(AdminPermissionSeeder::class);
         $this->call(RoleSeeder::class);
         $this->call(AdminSeeder::class);
         $this->call(DoctorDepartmentsSeeder::class);
         $this->call(SocialSeeder::class);
         $this->call(SubscriberSeeder::class);
         
    }
}

