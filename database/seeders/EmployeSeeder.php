<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employe;
use Faker\Factory as Faker;


class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    $faker = Faker::create();

    for($i=0 ; $i<10 ; $i++){

    $employe = new Employe();
    $employe->emp_id = mt_rand(1000, 9999); // Generate a random employee ID
    $employe->name = $faker->name;
    $employe->email = $faker->unique()->safeEmail;
    $employe->address = $faker->address;
    $employe->status = 1;
    $employe->save();

    }
    }
}
