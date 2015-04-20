<?php namespace App\Http\Controllers;

Use App\Jugador;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class JugadoresController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$jugadores = Jugador::select('*')
			->orderBy('victorias', 'desc')
			->orderBy('derrotas', 'asc')
			->paginate(10);

		return view('ed-2015.clasificacion', compact('jugadores'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$provincias = [
			'' 				=> 'Selecciona tu provincia',
			'A Coruña'		=> 'A Coruña',
			'Alacant' 		=> 'Alacant',
			'Albacete' 		=> 'Albacete',
			'Almería' 		=> 'Almería',
			'Araba' 		=> 'Araba',
			'Asturies' 		=> 'Asturies',
			'Ávila' 		=> 'Ávila',
			'Badajoz' 		=> 'Badajoz',
			'Barcelona' 	=> 'Barcelona',
			'Bizkaia' 		=> 'Bizkaia',
			'Burgos' 		=> 'Burgos',
			'Cáceres' 		=> 'Cáceres',
			'Cádiz' 		=> 'Cádiz',
			'Cantabria' 	=> 'Cantabria',
			'Castellón' 	=> 'Castellón',
			'Ceuta' 		=> 'Ceuta',
			'Ciudad Real' 	=> 'Ciudad Real',
			'Córdoba' 		=> 'Córdoba',
			'Cuenca' 		=> 'Cuenca',
			'Gipuzkoa' 		=> 'Gipuzkoa',
			'Girona' 		=> 'Girona',
			'Granada' 		=> 'Granada',
			'Guadalajara' 	=> 'Guadalajara',
			'Huelva' 		=> 'Huelva',
			'Huesca' 		=> 'Huesca',
			'Illes Balears' => 'Illes Balears',
			'Jaén' 			=> 'Jaén',
			'La Rioja' 		=> 'La Rioja',
			'Las Palmas' 	=> 'Las Palmas',
			'León' 			=> 'León',
			'Lleida' 		=> 'Lleida',
			'Lugo' 			=> 'Lugo',
			'Madrid' 		=> 'Madrid',
			'Málaga' 		=> 'Málaga',
			'Melilla' 		=> 'Melilla',
			'Murcia' 		=> 'Murcia',
			'Navarra' 		=> 'Navarra',
			'Ourense'		=> 'Ourense',
			'Palencia' 		=> 'Palencia',
			'Pontevedra' 	=> 'Pontevedra',
			'Salamanca' 	=> 'Salamanca',
			'S.C. Tenerife' => 'Santa Cruz de Tenerife',
			'Segovia' 		=> 'Segovia',
			'Sevilla' 		=> 'Sevilla',
			'Soria' 		=> 'Soria',
			'Tarragona' 	=> 'Tarragona',
			'Teruel' 		=> 'Teruel',
			'Toledo' 		=> 'Toledo',
			'Valencia' 		=> 'Valencia',
			'Valladolid' 	=> 'Valladolid',
			'Zamora' 		=> 'Zamora',
			'Zaragoza' 		=> 'Zaragoza'
		];

		return view('ed-2015.inscripcion', compact('provincias'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Request::all();
		$reglas = array(
			'nombre' 	=> 'required',
			'apellido' 	=> 'required',
			'localidad' => 'required',
			'provincia' => 'required'
		);

		$val = Validator::make($data, $reglas);

		if ($val->fails()) {
			return redirect()->back()
				->withErrors($val->errors())
				->withInput();
		}

		$jugador = Jugador::create($data);

		return redirect()->back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
