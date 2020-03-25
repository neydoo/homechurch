<?php

namespace Modules\Regions\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class RegionSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::table('regions')->truncate();
        $regions = [
            [
                'country_id' => 160,
                'name' => 'Region 1',
                'code' => '0101'
            ]
        ];
        DB::table('regions')->insert($regions);
        // $this->call("OthersTableSeeder");
    }
}
