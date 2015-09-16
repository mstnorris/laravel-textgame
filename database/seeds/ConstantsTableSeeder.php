<?php

use App\Player;
use App\Location;
use App\Question;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ConstantsTableSeeder extends Seeder
{
    /**
     *
     */
    public function run()
    {

        /*
         * Base User Accounts
         */
        // Mike's account
        $michael = User::create([
            'name' => 'Michael Norris',
            'email' => 'mstnorris@gmail.com',
            'password' => bcrypt('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // Mike's player account
        $mikePlayer = Player::create([
            'name' => 'Mike'
        ]);

        // Sezer's player account
        $sezerPlayer = Player::create([
            'name' => 'Sezer'
        ]);





    }
}
