<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('textos', function(Blueprint $table)
		{	 $table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('titulo');
			$table->text('descricao');
			$table->integer('user_id')->unsigned();
			$table->integer('posicao');
			$table->boolean('isExist');
			
			$table->timestamps();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE')->onUpdate('CASCADE');
		
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::dropIfExists('textos');
	}

}
