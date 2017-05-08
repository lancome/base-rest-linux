<?php

use Illuminate\Database\Seeder;
use App\Room;
use App\User;
use App\Sensor;

class SensorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User;
        $user->name = 'Jegor';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('123123');
        $user->save();

        Room::create([
            'name' => 'Bedroom',
        ]);
        Room::create([
            'name' => 'Kitchen',
        ]);
        Room::create([
            'name' => 'WC',
        ]);
    }
}
