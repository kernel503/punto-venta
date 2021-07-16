<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Carlos',
            'email' => 'carlos@gmail.com',
            'password' => Hash::make('1234'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        // $admin = User::where('email', 'admin@gmail.com')->first();
        // $admin->createToken('administrador');

        // $usuario = User::where('email', 'carlos@gmail.com')->first();
        // $usuario->createToken('cliente');
    }
}
