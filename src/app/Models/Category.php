<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table      = 'LCategory';
	protected $primaryKey = 'id_category';
    public $timestamps    = false;
    
	protected $fillable = [
		'description'
	];
	
}
