<?php

use Illuminate\Database\Seeder;
use \App\Country;
use \App\User;

class PhoneNumbersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('phone_numbers')->truncate();

        DB::table('phone_numbers')->insert([
            'number' => '666666666',
            'country_id' => Country::where('code', 'ES')->value('id'),
            'user_id' => User::where('email', 'user1@gmail.com')->value('id'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('phone_numbers')->insert([
            'number' => '666666666',
            'country_id' => Country::where('code', 'GB')->value('id'),
            'user_id' => User::where('email', 'user1@gmail.com')->value('id'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('phone_numbers')->insert([
            'number' => '777777777',
            'country_id' => Country::where('code', 'ES')->value('id'),
            'user_id' => User::where('email', 'user1@gmail.com')->value('id'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('phone_numbers')->insert([
            'number' => '444444444',
            'country_id' => Country::where('code', 'ES')->value('id'),
            'user_id' => User::where('email', 'user2@gmail.com')->value('id'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('phone_numbers')->insert([
            'number' => '555555555',
            'country_id' => Country::where('code', 'ES')->value('id'),
            'user_id' => User::where('email', 'user2@gmail.com')->value('id'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('phone_numbers')->insert([
            'number' => '666666666',
            'country_id' => Country::where('code', 'DE')->value('id'),
            'user_id' => User::where('email', 'user2@gmail.com')->value('id'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
