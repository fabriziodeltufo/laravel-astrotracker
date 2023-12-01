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

    // public function up()
    // {
    //     Schema::create('posts', function ($t) {
    //         $t->increments('id');
    //         $t->string('title',200);
    //         $t->string('slug',400);
    //         $t->boolean('draft');
    //         $t->text('body');
    //         $t->timestamps();
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // public function down()
    // {
    //     Schema::dropIfExists('posts');
    // }

    // commentato tutto xche fa riferimento a Laravel < 8 version (forse 5.3)
};
