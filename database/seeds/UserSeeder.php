<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name = 'Jonathan Duran';
        $user->email = 'admin@programate.com';
        $user->password = bcrypt('laravel2017');
        $user->save();
    }
}
