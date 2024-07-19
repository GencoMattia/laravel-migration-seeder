<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $trains = [
            [
                'company' => 'Elven Railways',
                'departure_station' => 'Rivendell',
                'arrival_station' => 'Lothlórien',
                'departure_time' => '2024-07-18 10:30:00',
                'arrival_time' => '2024-07-19 14:45:00',
                'train_code' => 'ER-123',
                'carriage_count' => 5,
                'on_time' => true,
                'cancelled' => false
            ],
            [
                'company' => 'Dwarven Express',
                'departure_station' => 'Erebor',
                'arrival_station' => 'Iron Hills',
                'departure_time' => '2024-07-19 08:00:00',
                'arrival_time' => '2024-07-20 16:20:00',
                'train_code' => 'DE-567',
                'carriage_count' => 10,
                'on_time' => false,
                'cancelled' => true
            ],
            [
                'company' => 'Hobbiton Transit',
                'departure_station' => 'Hobbiton',
                'arrival_station' => 'Bucklebury Ferry',
                'departure_time' => '2024-07-20 11:15:00',
                'arrival_time' => '2024-07-20 15:30:00',
                'train_code' => 'HT-890',
                'carriage_count' => 3,
                'on_time' => true,
                'cancelled' => false
            ],
            [
                'company' => 'Gondorian Lines',
                'departure_station' => 'Minas Tirith',
                'arrival_station' => 'Osgiliath',
                'departure_time' => '2024-07-21 09:45:00',
                'arrival_time' => '2024-07-21 12:00:00',
                'train_code' => 'GL-456',
                'carriage_count' => 8,
                'on_time' => true,
                'cancelled' => false
            ],
            [
                'company' => 'Ranger Run',
                'departure_station' => 'Thranduil\'s Halls',
                'arrival_station' => 'Dale',
                'departure_time' => '2024-07-22 13:00:00',
                'arrival_time' => '2024-07-23 09:30:00',
                'train_code' => 'RR-234',
                'carriage_count' => 4,
                'on_time' => true,
                'cancelled' => false
            ],
            [
                'company' => 'Rohan Riders',
                'departure_station' => 'Edoras',
                'arrival_station' => 'Helm\'s Deep',
                'departure_time' => '2024-07-23 15:00:00',
                'arrival_time' => '2024-07-24 10:00:00',
                'train_code' => 'RR-789',
                'carriage_count' => 6,
                'on_time' => false,
                'cancelled' => false
            ],
            [
                'company' => 'Dunedain Dispatch',
                'departure_station' => 'Fornost',
                'arrival_station' => 'Annúminas',
                'departure_time' => '2024-07-24 12:30:00',
                'arrival_time' => '2024-07-25 18:00:00',
                'train_code' => 'DD-111',
                'carriage_count' => 7,
                'on_time' => true,
                'cancelled' => false
            ],
            [
                'company' => 'Ent Express',
                'departure_station' => 'Fangorn Forest',
                'arrival_station' => 'Isengard',
                'departure_time' => '2024-07-25 09:00:00',
                'arrival_time' => '2024-07-26 15:30:00',
                'train_code' => 'EE-222',
                'carriage_count' => 2,
                'on_time' => true,
                'cancelled' => false
            ],
            [
                'company' => 'Eagle Airways',
                'departure_station' => 'Lonely Mountain',
                'arrival_station' => 'Carrock',
                'departure_time' => '2024-07-26 14:00:00',
                'arrival_time' => '2024-07-26 16:00:00',
                'train_code' => 'EA-333',
                'carriage_count' => 1,
                'on_time' => true,
                'cancelled' => false
            ],
            [
                'company' => 'Harfoot Hiker',
                'departure_station' => 'Tuckborough',
                'arrival_station' => 'Michel Delving',
                'departure_time' => '2024-07-27 10:00:00',
                'arrival_time' => '2024-07-27 17:00:00',
                'train_code' => 'HH-444',
                'carriage_count' => 5,
                'on_time' => true,
                'cancelled' => false
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->company = $train["company"];
            $newTrain->departure_station = $train["departure_station"];
            $newTrain->arrival_station = $train["arrival_station"];
            $newTrain->departure_time = $train["departure_time"];
            $newTrain->arrival_time = $train["arrival_time"];
            $newTrain->train_code = $train["train_code"];
            $newTrain->carriage_count = $train["carriage_count"];
            $newTrain->on_time = $train["on_time"];
            $newTrain->cancelled = $train["cancelled"];
            $newTrain->save();
        }
    }
}
