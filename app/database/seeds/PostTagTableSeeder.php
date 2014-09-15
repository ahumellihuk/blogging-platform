<?php

class PostTagTableSeeder extends Seeder {

    public function run()
    {
        DB::table('post_tag')->delete();

	$springTag = Tag::whereName('spring')->first();
        Post::whereTitle('Blog Post Title 1')->first()->tags()->save($springTag);

	$summerTag = Tag::whereName('summer')->first();
	Post::whereTitle('Blog Post Title 1')->first()->tags()->save($summerTag);

	$appleTag = Tag::whereName('apple')->first();
	Post::whereTitle('Blog Post Title 2')->first()->tags()->save($appleTag);

	Post::whereTitle('Blog Post Title 3')->first()->tags()->save($appleTag);
    }

}
