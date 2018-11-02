<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();//import library faker
		
		$limit = 10;//batasan berapa banyak database
		
		for($i=0;$i<$limit;$i++){
			DB::table('admins')->insert([//mengisi data di database
				'nama'=>$faker->name,
				'email'=>$faker->unique()->email,//email unique sehingga tidak ada yang sama
				'username'=>$faker->username,
				'password'=>$faker->password,
				]);
		}
    }
}
