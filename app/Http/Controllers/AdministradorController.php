<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Categoria;
use App\Servico;
use App\Produto;
use App\Image;

class AdministradorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$users = DB::table('users')->get();
		$categorias=Categoria::all();
		$servicos = Servico::all();

		return view('administracao.list-users',compact('users','categorias','servicos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		$user = User::find($id);
		$servicos = Servico::all();

		return view ('administracao.show-user',compact('user','servicos'));

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

	// mostra a tabela de produtos
	public function produtos()
	{
		//
		$produtos = Produto::paginate(10);
		//$categorias = Categoria::paginate(10);
		$images = Image::all();
		$categorias = Categoria::all();
		//own query
		$produtos_imgs=DB::table('produtos')
						->join('images','produtos.id','=','images.produto_id')
						->select('produtos.*','images.file')
						->groupBy('produtos.nome')
						->get();


		$servicos = Servico::all();

				
			return view('produto.list-adm-produto',compact('produtos','categorias','servicos'));
		
	}
}
