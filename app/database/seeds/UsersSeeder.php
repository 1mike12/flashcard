<?php

class UsersSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public $users = [
        "email" => "1mike12@gmail.com",
        "name" =>"mike",
        "password" => "123",
        "confirmed" => 1,
        "created_at" => "2015-01-01 03:26:57"
    ];

    public function run() {
        Eloquent::unguard();
        //delete all users
        DB::table('users')->delete();

        //setting up piped piper user
        $this->users["password"] = Hash::make($this->users["password"]);
        User::create($this->users);
    }
}
