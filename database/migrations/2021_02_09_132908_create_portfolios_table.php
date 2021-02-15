<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{       Schema::create('product_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });


        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('header');
            $table->string('subheader');
            $table->string('image');
            $table->unsignedBigInteger('type_id')->index();
            $table->double('price');
            $table->timestamps();
     
     
            $table->foreign('type_id')
            ->references('id')
            ->on('product_types')
            ->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios');
        Schema::dropIfExists('product_types');
    }
}
