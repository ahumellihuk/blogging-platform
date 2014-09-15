<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array('email' => 'foo@bar.com', 'name' => 'Foo Bar'));
	User::create(array('email' => 'camoiloc@gmail.com', 'name' => 'Dmitri Samoilov'));
	User::create(array('email' => 'darja.alymova@gmail.com', 'name' => 'Darya Alymova'));
    }

}
