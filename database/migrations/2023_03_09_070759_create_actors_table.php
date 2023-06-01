<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('actor', function (Blueprint $table) {
            $table->bigIncrements('idActor');
            $table->timestamps();
    
            $table->string('name');
            $table->date('birthdate');
    
            $table->softDeletes(); #este campo almacena la fecha y hora en que un registro es eliminado de la tabla
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actor');
    }
};
