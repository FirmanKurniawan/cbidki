<?php

use Illuminate\Database\Seeder;
use App\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'nama' => 'Admin',
            'alamat' => 'Jl. Jalan',
            'telepon' => '086969696969',
            'email' => 'admin@gmail.com',
            'facebook' => 'https://www.facebook.com/CB-DKI-Jakarta-792275537530085/',
            'twitter' => 'https://twitter.com/cb_djakarta',
            'instagram' => 'https://www.instagram.com/cbindonesia/',
            'pengantar1' => 'lorem ipsum 1',
            'pengantar2' => 'lorem ipsum 2',
            'pengantar3' => 'lorem ipsum 3',
            'gambar_depan' => 'no-image.png',
            'gambar_about' => 'no-image.png',
            'gambar_bawah' => 'no-image.png'
        ]);
    }
}
