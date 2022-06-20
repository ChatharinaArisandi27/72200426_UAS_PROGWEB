<?php

use App\Maba;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MabaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id');

        for($i = 1; $i <= 50; $i++)
        {
            DB::table('mahasiswa')->insert([
                'nim' => $faker->numberBetween(7225,7240),
                'nama' => $faker->name(),
                'jurusan' =>$faker->jobTitle(),
                'alamat' =>$faker->address()
            ]);
        }
    }
}
