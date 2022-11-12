<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('Vuelo', function (Blueprint $table) {
            $table->id();
            $table->string('origen');
            $table->string('destino');
            $table->double('precio');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Vuelo');
    }
};
