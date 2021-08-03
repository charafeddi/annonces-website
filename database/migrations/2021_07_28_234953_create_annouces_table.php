<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoucesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annouces', function (Blueprint $table) {
            $table->id('id-annouce');
            $table->string('title');
            $table->text('description');
            $table->string('city',100);
            $table->boolean('price')->nullable();//null because he can let it empty

            //adding the foreign key 
            $table->foreignId('id')->constrained('users');
            $table->foreignId('id_subcategory')->constrained('subcategories');//subcategorie 
            $table->foreignId('id_image')->constrained('imageables');

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
        Schema::dropIfExists('annouces');
    }
}
