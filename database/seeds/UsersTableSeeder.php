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
        User::create([
            'name'   => 'Bushra Rehan',
            'email'      => 'bushra.rehan@billie.test',
            'password'   => bcrypt('billie1234!'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        User::create([
            'name'   => 'John Smith',
            'email'      => 'john.smith@billie.test',
            'password'   => bcrypt('billie1234!'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        User::create([
            'name'   => 'Sara Maria',
            'email'      => 'sara.maria@billie.test',
            'password'   => bcrypt('billie1234!'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
