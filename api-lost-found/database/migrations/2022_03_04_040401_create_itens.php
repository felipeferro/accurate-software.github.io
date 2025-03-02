<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Createitems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->string('foto_url');
            $table->string('location');
            $table->enum('status', ['Founded', 'Losted', 'Resolved']);
            $table->integer('whatsapp');
            $table->integer('reward');
            $table->integer('category_id');

            $table->foreign('category_id')
                ->references('category')
                ->on('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
