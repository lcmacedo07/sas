<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration {

    public function down() {
        Schema::dropIfExists('books');
    }

    public function up() {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('uuid')->unique();
            
			$table->string('name', 120);
			$table->unsignedBigInteger('isbn')->nullable();
            $table->decimal('value', 8, 2)->nullable();
             
            $table->timestamps();
             
        });
    }
}
