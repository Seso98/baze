<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $counties = [
            ['name' => 'Grad Zagreb'],
            ['name' => 'Zagrebacka Zupanija'],
            ['name' => 'Zadarska Zupanija']
        ];


        DB::table('counties')->insert($counties);

        $municipalities =[
            ['name' => 'Zagreb','county_id'=>1],
            ['name' => 'Velika Gorica','county_id'=>2],
            ['name' => 'Zadar','county_id'=>3]
        ];

        DB::table('municipalities')->insert($municipalities);
    }
}
