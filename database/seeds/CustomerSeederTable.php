<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert(
            [
                'name' => 'Nguyen Van A',
                'email' => 'anv@gmail.com',
                'age' => '25',
                'address' => 'Ha Noi',
            ]
        );
    }
}
