<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
use Request;
class CategoryNewsRelationship extends Model
{
	//
	protected $table = 'CategoryNewsRelationship';
	public $timestamps = false;
}