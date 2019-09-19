<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shop_name');
            $table->text('shop_address');
            $table->text('shop_description');
            $table->unsignedInteger('shop_admin_id');
            $table->unsignedInteger('shop_prefecture_id');
            $table->timestamps();
            $table->foreign('shop_admin_id')->references('id')->on('admins');
            $table->foreign('shop_prefecture_id')->references('id')->on('prefectures');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
