<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Juan',
            'username'=> 'programacionymas',
            'email'=> 'juan@gmail.com',
            'password'=> bcrypt('juan1234')

        ]);

        factory(User::class, 10)-> create();
    }
}
