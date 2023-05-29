<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Rol;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('users')->truncate();
        User::create(['id' => 10, 'name' => 'Admin',     'email' => 'XD@prueba.es',            'password' => Hash::make('123456Aa'), 'rol_id' => '1']);

      
        Rol::create(['id' => 1, 'nombre' => 'Admin']);
        Rol::create(['id' => 2, 'nombre' => 'Usuario']);
    }
}
