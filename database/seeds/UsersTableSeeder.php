<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@msys.com',
            'password' => Hash::make('admin@7704')
        ]);
        $author = User::create([
            'name' => 'Author User',
            'email' => 'author@msys.com',
            'password' => Hash::make('author@7704')
        ]);
        $user = User::create([
            'name' => 'User',
            'email' => 'user@msys.com',
            'password' => Hash::make('user@7704')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        $user->roles()->attach($userRole);

    }
}
