<?php namespace App;

use Illuminate\Database\Eloquent\Model;

Class MyModel extends Model
{
	protected $fillable = ['user', 'phone', 'secretAttribute', 'password'];

	protected $hidden = ['secretAttribute', 'password'];
}