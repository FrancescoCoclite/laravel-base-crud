<?php

use Illuminate\Database\Seeder;
use App\Fumetti;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayComics = config('comic');

        foreach($arrayComics as $fumetto){
            $dettaglio = new Comic();
            $dettaglio->title = $fumetto['title'];
            $dettaglio->description = $fumetto['description'];
            $dettaglio->thumb = $fumetto['thumb'];
            $dettaglio->price = $fumetto['price'];
            $dettaglio->sale_date = $fumetto['sale_date'];
            $dettaglio->type = $fumetto['type'];
            $dettaglio->save();
        }
    }
}
