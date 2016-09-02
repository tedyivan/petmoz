<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicoimagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('servicoimages', function(Blueprint $table)
		{	 $table->engine = 'InnoDB';

			$table->increments('id');
			$table->string('file');
			$table->string('caption');
			$table->integer('servico_id')->unsigned();
			$table->boolean('isexist');
			$table->timestamps();
		
			$table->foreign('servico_id')->references('id')->on('servicos')->onDelete('CASCADE')->onUpdate('CASCADE');
			
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
		Schema::dropIfExists('servicoimages');
	}

}
