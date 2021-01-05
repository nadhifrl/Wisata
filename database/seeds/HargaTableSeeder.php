<?php

use Illuminate\Database\Seeder;
use App\Harga;

class HargaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('harga')->insert([
            'harga' => '10000'
        ]);
    }
}
