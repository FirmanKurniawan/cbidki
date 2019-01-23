<?php

use Illuminate\Database\Seeder;
use App\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'pengantar1' => 'Ini About',
            'pengantar2' => 'Ini Juga',
            'pengantar3' => 'Nah ini juga'
        ]);
    }
}
