<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Temoignage;
use App\Models\Professional;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $services = [
            'Educateur',
            'Médecin',
            'Chauffeur',
        ];

        foreach ($services as $service) {
            $serviceModel = Service::create([
                'nom' => $service,
            ]);

            $serviceModel->professionals()->createMany([
                [
                    'nom' => 'John Doe',
                    'age' => 30,
                    'available_time' => '10:00-12:00',
                    'image' => 'john_doe.jpg',
                    'telephone'=> '0600000000',
                    'email' =>'hmido@gmail.com'
                ],
                [
                    'nom' => 'Jane Smith',
                    'age' => 35,
                    'available_time' => '14:00-16:00',
                    'image' => 'john_doe.jpg',
                    'telephone'=> '0600000000',
                    'email' =>'hmido@gmail.com'
                ],
                [
                    'nom' => 'Bob Johnson',
                    'age' => 40,
                    'available_time' => '18:00-20:00',
                    'image' => 'john_doe.jpg',
                    'telephone'=> '0600000000',
                    'email' =>'hmido@gmail.com'
                ],
            ]);
        }
        // Temoignage::create([
        //     'nom' => 'John Doe',
        //     'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla semper enim, vel malesuada lectus pulvinar vitae.',
        //     'image' => 'john_doe.jpg'
        // ]);
    }
}
