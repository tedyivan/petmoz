<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('images', function(Blueprint $table)
		{	 $table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('file');
			$table->string('caption');
			$table->integer('produto_id')->unsigned();
			$table->boolean('isexist');
			$table->timestamps();
		
			$table->foreign('produto_id')->references('id')->on('produtos')->onDelete('CASCADE')->onUpdate('CASCADE');

		});

		

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('images');
	}

}
