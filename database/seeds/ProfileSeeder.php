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
            'fanspage' => 'nothing',
            'pengantar1' => 'pengantar1',
            'pengantar2' => 'pengantar2',
            'pengantar3' => 'pengantar3'
        ]);
    }
}
