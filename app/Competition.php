<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Competition extends Model {

	protected $table = 'competitions';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];

	public function competitionSubmissions()
	{
		return $this->hasMany('Submission', 'competition_id');
	}

	public function competitionCatagories()
	{
		return $this->hasMany('Category', 'competition_id');
	}

}