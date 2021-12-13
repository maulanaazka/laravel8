<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat dan mengirim data ke db
        collect([ // untuk menampung data
            [
            'name' => 'Maulana Azka',
            'email' => 'azka@gmail.com',
            'password' => bcrypt('password'), // untuk enkripsi data, ambil password dari request browser (Hash::make)
            'email_verified_at' => now(), // lib untuk waktu (Carbon::now())
            'created_at' => now(), // harus masukan manual karena memakai func insert
            'updated_at' => now(),
            ],
            [
            'name' => 'Maulidan Rahman',
            'email' => 'maul@gmail.com',
            'password' => bcrypt('password'), // untuk enkripsi data, ambil password dari request browser
            'email_verified_at' => now(), // lib untuk waktu
            'created_at' => now(), // harus masukan manual karena memakai func insert
            'updated_at' => now(),
            ],
        ])->each(function($user) { // each untuk mengambil dan menampilkan data collect, tidak bisa dari array
             // tidak menggunakan Models\User karena ingin memasukkan real data
            DB::table('users')->insert($user); // menggunakan insert akan menghasilkan created_at NULL, berbeda dengan create
        });
    }
}
