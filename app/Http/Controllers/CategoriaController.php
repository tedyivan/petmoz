<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\Categoria;
use App\Produto;
use App\Servico;
use Validator;

class CategoriaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function _construct(Categoria $categoria){

		$this->categoria = $categoria;
	}



	public function index(Categoria $categoria)
	{
		//
		$categorias = $categoria->get();
		$servicos = Servico::all();
		return view('categoria.list',compact('categorias','servicos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$categorias = Categoria::all();
		$servicos = Servico::all();		
		return view('categoria.add-categoria',compact('categorias','servicos'));

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$validation = Validator::make($request->all(), [
         'designacao'     => 'required|regex:/^[A-Za-z ]+$/',
         
	      ]);

	      // Check if it fails //
	      if( $validation->fails() ){
	    

	         return redirect()->back()->withInput()
	                          ->with('errors', $validation->errors() );
	      }
		

		$categoria = new Categoria;
		$categoria->designacao=$request->input('designacao');
		$categoria->descricao=$request->input('descricao');
		$categoria->isexist="true";
		$categoria->save();

		return redirect('/categoria');
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
	public function edit($id, Request $request)
	{
		//
		$categoria = Categoria::whereId($id)->first();
		$servicos = Servico::all();
		$categorias=Categoria::all();

		return view('categoria.edit-categoria',compact('categoria','servicos','categorias'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//
		$validation = Validator::make($request->all(), [
         'designacao'     => 'required|regex:/^[A-Za-z ]+$/',
         
	      ]);

	      // Check if it fails //
	      if( $validation->fails() ){
	    

	         return redirect()->back()->withInput()
	                          ->with('errors', $validation->errors() );
	      }
		
		
		
		$categoria = Categoria::whereId($id)->first();
		$categoria->designacao = $request->get('designacao'); 
		$categoria->descricao =$request->get('descricao');

		$categoria->save();

		return redirect('categoria/');



	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{   
		$categoria = Categoria::whereId($id)->first();
		$categoria->delete();
		
		return redirect('categoria/');
	}

}
