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
          'email' => 'admin@proyeklangit.id',
          'password' => bcrypt('qwe123'),
          'phone' => '00',
          'address' => 'Bandung',
          'type' => 0
        ]);
    }
}
