<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
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
                'name' => $service,
            ]);

            $serviceModel->professionals()->createMany([
                [
                    'name' => 'John Doe',
                    'age' => 30,
                    'available_time' => '10:00-12:00',
                ],
                [
                    'name' => 'Jane Smith',
                    'age' => 35,
                    'available_time' => '14:00-16:00',
                ],
                [
                    'name' => 'Bob Johnson',
                    'age' => 40,
                    'available_time' => '18:00-20:00',
                ],
            ]);
        }
    }
}
