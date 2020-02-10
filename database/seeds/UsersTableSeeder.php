<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=App\User::create([
           'name'=>'kamal Neupane',
           'email'=>'kamal@gmail.com',
           'password'=>bcrypt('12345678'),
            'admin'=>1
        ]);
        App\Profile::create([
            'user_id'=>$user->id,
            'avatar'=>'/uploads/avatars/admin.png',
            'about'=>'Hello i am admin of this website.',
            'facebook'=>'facebook.com',
            'youtube'=>'youtube.com'
        ]);
    }
}
