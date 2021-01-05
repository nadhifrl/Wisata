<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class SaranaTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = Faker::create('id_ID');
        foreach(range(0,5) as $i){
      		DB::table('sarana')->insert([
            'judul'=>$faker->bothify('Taman ###'),
            'user_id'=>1,
        	'body'=>$faker->realText($maxNbChars = 50, $indexSize = 2),
        	'gambar'=>'gambar.jpg',
      		]);}
       // factory(App\Sarana::class,10)->create();
    }
}
