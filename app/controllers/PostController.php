<?php

class PostController extends BaseController {

	public function displayPost($id)
	{
		$post=Post::with('author', 'tags')->find($id);
		$postView = View::make('post')->with('post', $post)->with('author', $post->author)->with('tags', $post->tags);
		return View::make('extended_post')->with('post', $postView);
	}

	public function createPost()
	{
	}
}
