<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
	protected $table = 'vehiculos';

	protected $primaryKey = 'serie';

	protected $fillable = ['color', 'power', 'capacity', 'speed'];

	protected $hidden = ['serie','created_at', 'updated_at'];

	public function maker()
	{
		return $this -> belongsTo('App\Maker');
	}
} 