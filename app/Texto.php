<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Texto extends Eloquent {

	//
		protected $fillable=[
			'titulo', 'descricao'
		];

	

		public function user(){
 	
 			//return $this->belongsTo('app/Categoria', 'categoria_id');
			return $this->belongsTo('app\User');
 			//return $this->hasOne('Categoria');
 		}

 		

}		
