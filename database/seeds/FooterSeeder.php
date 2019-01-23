<?php

use Illuminate\Database\Seeder;
use App\Footer;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'pengantar1' => 'Ini Footer',
            'pengantar2' => 'Ini Juga',
            'pengantar3' => 'Nah ini juga'
        ]);
    }
}
