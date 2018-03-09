<?php

use Illuminate\Database\Seeder;

class YearsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $year = 2014;

        for ($i = 0; $i <= 4; $i++) {
            DB::table('years')->insert([
                'year' => $year + $i
            ]);
        }
    }
}
