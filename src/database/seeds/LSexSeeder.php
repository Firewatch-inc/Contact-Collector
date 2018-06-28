<?php

use Illuminate\Database\Seeder;

class LSexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('LSex')->insert([
			['description' => 'Мужской'],
			['description' => 'Женский']
		]);
    }
}
