<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'arrivi' => 'Roma',
                'partenze' => 'Milano',
                'destinazione' => 'Bolzano',
                'binario' => '1',
                'price' => 20,
                'is_available' => 1
            ],
            [
                'arrivi' => 'Firenze',
                'partenze' => 'Venezia',
                'destinazione' => 'Bolzano',
                'binario' => '2',
                'price' => 10,
                'is_available' => 1
            ]
        ];

        foreach($trains as $elem){
            $newTrain = new Train();
            $newTrain->arrivi = $elem['arrivi'];
            $newTrain->partenze = $elem['partenze'];
            $newTrain->destinazione = $elem['destinazione'];
            $newTrain->binario = $elem['binario'];
            $newTrain->price = $elem['price'];
            $newTrain->is_available = $elem['is_available'];
            $newTrain->save();
        }
    }
}
