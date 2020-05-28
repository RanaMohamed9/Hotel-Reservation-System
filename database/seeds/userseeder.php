<?php

use Illuminate\Database\Seeder;
use App\User;
class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =  DB::table('users')->where('email','admin@gmail.com')->get()->first();

          if(!$user){

              User::create([
                  'name'=>'admin',
                  'email'=>'admin@gmail.com', 'role'=>'admin',
                  'password'=>Hash::make('12345678'),
                  'phonenumber'=>'01111111111',
                  'address'=>'six october',
                  'creditcard_id'=>'1234123412341234'
              ]);

          }
    }
}
