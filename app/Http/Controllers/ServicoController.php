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

class ServicoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	

	public function index()
	{
		//
		$categorias = Categoria::all();
	
		$servicos = Servico::all();	
		$users=User::all(); 


		return view('servico.list-servico',compact('servicos','categorias','users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$categorias=Categoria::all();
		$servicos = Servico::all();

		return view('servico.add-servico',compact('categorias','servicos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$servico = new Servico();
		$user = Auth::User();     
         //$userId = $user->id;

		$servico->designacao =$request->input('designacao');
		$servico->descricao=$request->input('descricao');
		$servico->user_id=$user->id;
		$servico->isExist="true";
		$servico->save();


      	
      	$servicoImage = new Servicoimage();

      // upload the image //
	      $file = $request->file('userfile');
	      $destination_path = 'uploads/';
	      $filename = str_random(6).'_'.$file->getClientOriginalName();
	      $file->move($destination_path, $filename);
	      
	      // save image data into database //
	      $servicoImage->file = $destination_path . $filename;
	      $servicoImage->caption = $request->input('designacao');
	      //$image->description = $request->input('description');
	      
	      $servicoImage->isexist="true";
	      
	      $servicoImage->servico()->associate($servico);
	      $servicoImage->save();

	      return redirect('/servico')->with('message','You just uploaded an image!');

      
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
		$categorias=Categoria::all();
		$servicos=Servico::all();
		$servico=Servico::whereId($id)->first();
		$servicoImages=Servicoimage::whereServico_id($servico->id)->get();

		return view('servico.show-servico',compact('servico','categorias','servicoImages','servicos'));
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
		$servico=Servico::whereId($id)->first();
		$servico->delete();

		return redirect('/servico');	
	}

}
