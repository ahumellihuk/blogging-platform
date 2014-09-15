<?php

class Post extends Eloquent {
	protected $guarded = array();

	public function tags() {
		return $this->belongsToMany('Tag');
	}

	public function author() {
		return $this->belongsTo('User', 'user_id');
	}
}

