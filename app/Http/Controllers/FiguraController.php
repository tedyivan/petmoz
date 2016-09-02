<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use App\Produto;
use App\Categoria;
use App\Image;
use Validator;
use Auth;
use App\User;
use App\Servico;
use App\Servicoimage;
use App\Figura;


class FiguraController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		
		$users=User::all();
		$categorias=Categoria::all();
		$servicos = Servico::all();
		$figuras = Figura::all();

		return view('figura.list-figura',compact('figuras','users','categorias','servicos'));

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
	public function store(Request $request)
	{
		//

      $validation = Validator::make($request->all(), [
         'nome'     => 'required|regex:/^[A-Za-z0-9 ]+$/',
         'userfile'     => 'required'
      ]);

      // Check if it fails //
      if( $validation->fails() ){
    //  	 return 'falhanco';
         return redirect()->back()->withInput()
                          ->with('errors', $validation->errors() );
      }
	
      
      
      	$figura = new Figura();

      // upload the image //
	      $file = $request->file('userfile');
	      $destination_path = 'uploads/';
	      $filename = str_random(6).'_'.$file->getClientOriginalName();
	      $file->move($destination_path, $filename);
	      
	      // save image data into database //
	      $figura->file = $destination_path . $filename;
	      $figura->caption = $request->input('nome');
	      //$image->description = $request->input('description');
	      $figura->posicao = $request->input('posicao');
	      $figura->isexist="true";
	      $figura->save();

	 return redirect('/figura')->with('message','You just uploaded an image!');

      
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
		$figura=Figura::whereId($id)->first();
		$figura->delete();

		return redirect('/')->with('message','Removido com sucesso.');
	}

}
