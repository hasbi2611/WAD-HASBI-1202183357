<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PercobaanSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('percobaan')->insert([
            [
            'name' => 'Hasbi',
            'alamat' => 'Bandung',
            ],
            [
            'name' => 'Irvan',
            'alamat' => 'Sukabumi',
            ]
        
        ]);
    }
}
