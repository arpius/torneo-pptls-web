<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'jugadores';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'nombre',
		'apellido',
		'localidad',
		'provincia',
		'victorias',
		'derrotas'
	];

}
