<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if(Schema::hasTable('users'))//كان عندي مشكلةوههاد كان حلها بالاضافة الى امر php artisan migrate:fresh)(Error Base table or view already exists:) وحلها
         return;

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
            $table->string('name')->unique();
            $table->string('cost');



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
}
