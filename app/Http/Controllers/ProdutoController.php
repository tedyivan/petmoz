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
use App\Servico;



class ProdutoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
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

		
			return view('produto.list-produtos-todos',compact('produtos','categorias','images','produtos_imgs','servicos'));		  
		

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Produto $produto, Categoria $categoria)
	{
		//
		$categorias = $categoria->get();
		$servicos = Servico::all();

		return view('produto.add-produto',compact('categorias','servicos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		$validation = Validator::make($request->all(), [
		         'nome'     => 'required|regex:/^[A-Za-z0-9]+(.*?)[A-Za-z0-9]*$/',
		         'preco'    =>  'required|Integer|Min:2',
		         'userfile'     => 'required',
		         
		      ]);

		      // Check if it fails //
		      if( $validation->fails() ){
		    //  	 return 'falhanco';
		         return redirect()->back()->withInput()
		                          ->with('errors', $validation->errors() );
		      }
			

		$produto= new Produto;

		$produto->nome =$request->input('nome');
		$produto->preco =$request->input('preco');
		$produto->descricao=$request->input('descricao');
		$produto->categoria_id=$request->input('categoria_id');
		$produto->isExist="true";
		$produto->save();

		$image = new Image;

     	 // upload the image //
      	$file = $request->file('userfile');
      	$destination_path = 'uploads/';
      	$filename = str_random(6).'_'.$file->getClientOriginalName();
      	$file->move($destination_path, $filename);
      
      	// save image data into database //
      	$image->file = $destination_path . $filename;
      	$image->caption = $request->input('nome');
      	$image->isexist="true";
      	
	      	
      	$image->produto()->associate($produto);
      	
      	$image->save();

      //	$produto->images()->save($image);


      	return redirect('/produto');
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
		$produto =Produto::find($id);
		$images = Image::whereProduto_id($produto->id)->get();
		$categoria_produto = Categoria::find($produto->categoria_id);
		$categorias = Categoria::all();
		$servicos = Servico::all();

         return view('produto.show-produto',compact('produto','images','categoria_produto','categorias','servicos'));
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
		$produto =Produto::find($id);
		$categorias = Categoria::all();
		$servicos = Servico::all();

		return view('produto.edit-produto',compact('produto','categorias','servicos'));
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

		$produto = Produto::whereId($id)->first();

		$produto->nome =$request->get('nome');
		$produto->preco =$request->get('preco');
		$produto->descricao=$request->get('descricao');
		$produto->categoria_id=$request->get('categoria_id');
		$produto->isExist="true";
		
		$produto->save();
		return redirect('produto/');
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

		$produto = Produto::whereId($id)->first();
		$images = Image::whereProduto_id($produto->id)->delete();
		$produto ->delete();

		return redirect('tblprodutos/'); 
	}

	/**
	acrescentado pra visualizar produtos com uma categoria especifica

	**/
	public function produtos($categ){

			$categoria = Categoria::whereDesignacao($categ)->first();

			$produtos = Produto::whereCategoria_id($categoria->id)->get();

			$categorias = Categoria::all();
			
			$produtos_imgs=DB::table('produtos')
						->where('categoria_id','=',$categoria->id)
						->join('images','produtos.id','=','images.produto_id')
						->select('produtos.*','images.file')
						->groupBy('produtos.nome')
						->get();

			$servicos = Servico::all();


			return view('produto.list-produto',compact('produtos','categorias','images','produtos_imgs','servicos','categoria'));

	}



}
