<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Servicoimage extends Eloquent {

	//

	public function servico(){
 		//return $this->belongsTo('app/produto', 'produto_id');
 	
		return $this->belongsTo('app\Servico');
 	}

 }