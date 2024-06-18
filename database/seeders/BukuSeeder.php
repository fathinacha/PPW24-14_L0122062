<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bukus')->insert([
            [
                'judul' => 'Mastering JavaScript',
                'penulis' => 'Willem Daendol',
                'penerbit' => 'Pustaka Ilmu',
                'tahun_terbit' => 2021,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'judul' => 'Database MySQL',
                'penulis' => 'Lukas Smith',
                'penerbit' => 'Informatika',
                'tahun_terbit' => 2019,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'judul' => 'Python untuk Data Science',
                'penulis' => 'Alice Hexen',
                'penerbit' => 'Deepublish',
                'tahun_terbit' => 2022,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
