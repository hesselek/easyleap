<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuppliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('supplies')->insert([
                                'name'=>'Chair',
                                'created_at'=>Carbon::now('Europe/Madrid'),
                                'purchase_date'=>Carbon::createFromFormat('d/m/Y H:m','16/01/2020 10:00','Europe/Madrid')
        ]);
        DB::table('supplies')->insert([
                                'name'=>'Table',
                                'created_at'=>Carbon::now('Europe/Madrid'),
                                'purchase_date'=>Carbon::createFromFormat('d/m/Y H:m','14/03/2020 12:00','Europe/Madrid')
        ]);
        DB::table('supplies')->insert([
                                'name'=>'Whiteboard',
                                'created_at'=>Carbon::now('Europe/Madrid'),
                                'purchase_date'=>Carbon::createFromFormat('d/m/Y H:m','20/11/2020 18:00','Europe/Madrid')
        ]);

    }
}
