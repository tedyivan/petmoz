<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Image extends Eloquent {

	//
	public function produto(){
 		//return $this->belongsTo('app/produto', 'produto_id');
 	
		return $this->belongsTo('app\Produto');
 	}

}
