<?php

class TagTableSeeder extends Seeder {

    public function run()
    {
        DB::table('tags')->delete();

        Tag::create(array('name' => 'spring'));
	Tag::create(array('name' => 'summer'));
	Tag::create(array('name' => 'apple'));
    }

}
