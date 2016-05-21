<?php

use Illuminate\Database\Seeder;

class SentinelDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Users
        DB::table('users')->truncate();

        $admin = Sentinel::registerAndActivate([
            'email'    => 'admin@example.com',
            'password' => '!Testing123'
        ]);

        $member = Sentinel::registerAndActivate([
          'email'    => 'member@example.com',
          'password' => '!Testing123'
        ]);

        // // Create Activations
        // DB::table('activations')->truncate();
        // $code = Activation::create($admin)->code;
        // Activation::complete($admin, $code);
        // $code = Activation::create($user)->code;
        // Activation::complete($user, $code);

        // Create Roles
        $adminRole = Sentinel::getRoleRepository()->create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => [
              'users.create' => true,
              'users.update' => true,
              'users.view' => true,
              'users.destroy' => true,
              'roles.create' => true,
              'roles.update' => true,
              'roles.view' => true,
              'roles.delete' => true
            ]
        ]);
        $memberRole = Sentinel::getRoleRepository()->create([
          'name' => 'Member',
          'slug' => 'member',
          'permissions' => []
        ]);

        // Assign Roles to Users
        $adminRole->users()->attach($admin);
        $memberRole->users()->attach($member);
    }
}
