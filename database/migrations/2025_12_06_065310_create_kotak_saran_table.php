<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
{
    Schema::create('kotaksaran', function (Blueprint $table) {
        $table->id();
        $table->string('nama')->nullable();
        $table->string('email')->nullable();
        $table->text('pesan');
        $table->timestamps();
    });
}

};
