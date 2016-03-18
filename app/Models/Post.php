<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Post extends Model
{
    
	public $table = "posts";
    

	public $fillable = [
	    "id",
		"title",
		"body",
		"created_at",
		"updated_at"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "id" => "integer",
		"title" => "string",
		"body" => "string"
    ];

	public static $rules = [
	    
	];

}
