<?php

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name'=> 'Gustavo',
            'email' => 'gustavo@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
