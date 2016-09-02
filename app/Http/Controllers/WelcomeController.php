<?php namespace App\Http\Controllers;
//adicionado
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Texto;
use App\Categoria;
use Auth;
use App\Servico;
use App\Figura;


class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{	$categorias = Categoria::all();
		$textos = Texto::all();
		$servicos = Servico::all();
		$figuras = Figura::all();
		return view('inicio',compact('categorias','textos','servicos','figuras'));
	}

}
