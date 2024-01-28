<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("alias");
            $table->text("image");
            $table->string("title");
            $table->text("description");
            $table->string("title_meta");
            $table->text("description_meta");
            $table->string("keywords");
            $table->double("price");
            $table->double("discount");
            $table->integer("category_id");
            $table->string("storage_time");
            $table->string("color");
            $table->string("flavor");
            $table->string("sort");
            $table->string("volume");
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
        Schema::dropIfExists('products');
    }
};
