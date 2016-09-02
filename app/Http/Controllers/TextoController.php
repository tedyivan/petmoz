<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Texto;
use App\Categoria;
use Auth;
use App\Servico;

class TextoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	

	public function index()
	{
		$textos= Texto::all();
		$users=User::all();
		$categorias=Categoria::all();
		$servicos = Servico::all();

		return view('texto.list-texto',compact('textos','users','categorias','servicos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$posicaos=array('0','1','2','3');
		$categorias=Categoria::all();
		$servicos = Servico::all();
		

		return view('texto.add-texto',compact('posicaos','categorias','servicos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$texto = new Texto();
		 $user = Auth::User();     
         //$userId = $user->id;

		$texto->titulo =$request->input('titulo');
		$texto->descricao=$request->input('descricao');
		$texto->posicao=$request->input('posicao');
		$texto->user_id=$user->id;
		$texto->isExist="true";
		$texto->save();

		return redirect('/texto');
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
		$texto=Texto::whereId($id)->first();
		$posicaos=array('0','1','2','3');
		$servicos = Servico::all();
		$categorias=Categoria::all();

		return view('texto.edit-texto',compact('texto','posicaos','servicos','categorias'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,Request $request)
	{
		//
		$user = Auth::User(); 
		$texto=Texto::whereId($id)->first();
		$texto->titulo=$request->get('titulo');
		$texto->descricao=$request->get('descricao');
		$texto->posicao=$request->get('posicao');
		$texto->user_id=$user->id;
		$texto->isExist=$request->get('estado');
		
		$texto->save();

		return redirect('/texto');	
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
		$texto=Texto::whereId($id)->first();
		$texto->delete();

		return redirect('/texto');
	}

}
