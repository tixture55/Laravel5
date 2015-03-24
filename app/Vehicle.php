<?php namespace App;

use Illuminate\Database\Eloquent\Model;

Class Vehicle extends Model
{
	protected $table = 'vehicles';

	protected $primary = 'serie';

	protected $fillable = ['color', 'power', 'capacity', 'speed', 'maker_id'];

	protected $hidden = ['serie', 'created_at', 'updated_at'];

	public function maker()
	{
		return $this->belongsTo('App\Maker');
	}
}