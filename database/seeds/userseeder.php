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
        $user =  DB::table('users')->where('email','omar74tarek@gmali.com')->get()->first();

          if(!$user){

              User::create([
                  'name'=>'omar',
                  'email'=>'omar74tarek@gmali.com', 'role'=>'admin',
                  'password'=>Hash::make('12345678'),
                  'phonenumber'=>'011133668169',
                  'address'=>'six october',
                  'creditcard_id'=>'1111111111'
              ]);

          }
    }
}
