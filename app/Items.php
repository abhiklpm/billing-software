<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Items extends Model {

	protected $fillable = [
		'code',
		'name',
		'status',
		'created_at',
		'published_at'
	];

	public function getCreatedAtAttribute($value)
	{
		return Carbon::parse($value)->format('d-m-Y');
	}

	public function getPublishedAtAttribute($value)
	{
		return Carbon::parse($value)->format('d-m-Y');
	}

}
