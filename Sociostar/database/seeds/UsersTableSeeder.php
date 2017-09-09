<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->delete();
      User::create([
        'name' => 'Admin',
        'email' => 'admin@admin.com',
        'password' => bcrypt("secret"),
        'phone' => '081432555524',
        'address' => 'Bandung',
        'photo' => 'users/admin.png',
        'type' => 1
      ]);
    }
}
