<?php

use Illuminate\Database\Seeder;

class BioskopSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('bioskop')->insert([
            'nama_bioskop' => str_random(10),
        'kota' => str_random(5),
            'alamat' =>str_random(20),
            'jumlah_studio' => 5,


        ]);

    }
}
