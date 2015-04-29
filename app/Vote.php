<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vote extends Model {

	protected $table = 'votes';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function submissionVote()
	{
		return $this->hasOne('Submission', 'id');
	}

	public function voteCategory()
	{
		return $this->hasOne('Category', 'id');
	}

}