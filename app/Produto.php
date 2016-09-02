<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Produto extends Eloquent {

	//
		protected $fillable=[
			'nome', 'preco','descricao'
		];

	

		public function categoria(){
 	
 			//return $this->belongsTo('app/Categoria', 'categoria_id');
			return $this->belongsTo('app\Categoria');
 			//return $this->hasOne('Categoria');
 		}

 		public function images(){
 			return $this->hasMany('Image');
 		}





}		

