<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_items', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('category_id')->unsigned();
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('content_raw');
            $table->text('content_html');
            $table->boolean('is_published')->default(false);
            $table->timestamp('published_at')->nullable();



            $table->timestamps();
            $table->softDeletes();


            $table->foreign('category_id')->references('id')->on('product_categories');
            $table->index('is_published');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_items');
    }
}
