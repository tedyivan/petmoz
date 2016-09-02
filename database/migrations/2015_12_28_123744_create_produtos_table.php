<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produtos', function(Blueprint $table)
		{	 $table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('nome');
			$table->string('preco');
			$table->text('descricao');
			$table->integer('categoria_id')->unsigned();
			$table->boolean('isExist');
			
			$table->timestamps();
			$table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('CASCADE')->onUpdate('CASCADE');
		
		});

		
			
		


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('produtos');
	}



}
