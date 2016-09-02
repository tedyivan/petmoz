<?php namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Categoria extends Eloquent {

	//
	protected $fillable=[
			'descricao','desiganacao'
		];

	public function produtos(){
		return $this->hasMany('Produto');
	}

}
