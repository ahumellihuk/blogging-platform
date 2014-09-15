<?php

class HomeController extends BaseController {

	public function displayAllPosts()
	{
		$postViews = array();
		$posts=Post::with('author', 'tags')->get();

		foreach ($posts as $post) {
			Log::debug('Rendering a post: Title = '.$post->title.'; Author = '.$post->author->name.'; Created at = '.$post->created_at.'; Tags:');
			foreach( $post->tags as $tag) {
				Log::debug('Tag = '.$tag->name);
			}
			$postView = View::make('post')->with('post', $post)->with('author', $post->author)->with('tags', $post->tags);
			array_push($postViews, $postView);
		}

		return View::make('home')->with('posts', $postViews);
	}

	public function displayPostsByTag($id)
	{
		$postViews = array();
		$posts = Tag::with('posts', 'posts.author', 'posts.tags')->find($id)->posts;

		foreach ($posts as $post) {
                        Log::debug('Rendering a post: Title = '.$post->title.'; Author = '.$post->author->name.'; Created at = '.$post->created_at.'; Tags:');
                        foreach( $post->tags as $tag) {
                                Log::debug('Tag = '.$tag->name);
                        }
                        $postView = View::make('post')->with('post', $post)->with('author', $post->author)->with('tags', $post->tags);
                        array_push($postViews, $postView);
                }

                return View::make('home')->with('posts', $postViews);
	}
}
