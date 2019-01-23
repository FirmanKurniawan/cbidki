<?php

use Illuminate\Database\Seeder;
use App\Visimisi;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visimisis')->insert([
            'isi' => 'ini visi',
            'tipe' => 1
        ]);

        DB::table('visimisis')->insert([
            'isi' => 'ini misi',
            'tipe' => 2
        ]);
    }
}
