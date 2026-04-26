<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recibos', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('users_id');
            $table->decimal('total', 10, 2);
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->dateTime('fecha');
            $table->string('metodo_pago') ->nullable(); // preguntar si necesito agregar una tabla de metodos de pago
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recibos');
    }
};
