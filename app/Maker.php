<?php namespace App;

use Illuminate\Database\Eloquent\Model;

Class Maker extends Model
{
	protected $table = 'makers';

	protected $primary = 'id';

	protected $fillable = ['name', 'phone'];

	protected $hidden = ['id', 'created_id', 'updated_id'];

	public function vehicles()
	{
		return $this->hasMany('App\Vehicle');
	}
}