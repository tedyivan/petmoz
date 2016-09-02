<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFigurasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('figuras', function(Blueprint $table)
		{	 $table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('file');
			$table->string('caption');
			$table->integer('posicao');
			$table->boolean('isexist');
			$table->timestamps();
		
			
			
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
		Schema::dropIfExists('figuras');
	}

}
