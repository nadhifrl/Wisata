<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1, 'name' => 'Jhon', 'email' => 'jhon12@gmail.com', 'password' => bcrypt('nadhif123'), 'role' => 1
        ]);
    }
}
