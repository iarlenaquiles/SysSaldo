<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Iarlen',
            'email' => 'iarlensilva775@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
