<?php

use Illuminate\Database\Seeder;

class CobaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Coba::create([
           'id'=>1,
           'fistname'=>'Sherly',
           'lastname'=>'Mauren',
            'gender'=>'female',
            'status'=>'Active',
            'email'=>'smauren54@gmail.com',
            'city'=>'Malang',
            'address'=>'Malang',
            'phone'=>'081553236791'
        ]);
    }
}
