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



class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{   $categorias = Categoria::all();
		$textos = Texto::all();
		$servicos = Servico::all();
		$figuras = Figura::all();

		return view('inicio',compact('textos','categorias','servicos','figuras'));
	}

}
