<?php

namespace Database\Seeders;

use App\Models\Beasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i = 0; $i < 50; $i++){
            $bea =  new Beasiswa();
            $bea->name = $faker->firstName() . $faker->randomElement($array = array(' School', ' University'));
            $bea->location = $faker->randomElement($array = array('Jakarta', 'Bandung', 'Surabaya'));
            $bea->image = $faker->randomElement($array = array('assets/school1.png', 'assets/school2.jpg'));
            $bea->category = $faker->randomElement($array = array('Beasiswa Pemerintah', 'Beasiswa Swasta', 'Beasiswa Negara Maju', 'Beasiswa Komunitas', 'Beasiswa Sekolah'));
            if(strpos($bea->name, 'University')){
                $bea->type = 'Kuliah';
            }
            else{
                $bea->type = $faker->randomElement($array = ['SD', 'SMP', 'SMA']);
            }
            $bea->save();
        }
    }
}
