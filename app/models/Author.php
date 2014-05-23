<?php

class Author extends \Eloquent {
	protected $guarded = array();

	public function authored() {
		return $this->belongsToMany('Book');
	}
}
