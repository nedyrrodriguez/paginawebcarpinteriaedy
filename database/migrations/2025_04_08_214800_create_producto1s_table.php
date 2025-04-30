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
        Schema::create('producto1s', function (Blueprint $table) {
            $table->id();
            $table->string(column:'nombre');
            $table->string(column:'descripcion')->nullable();
            $table->integer(column:'precio');
            $table->integer(column:'cantidad');
            $table->string('imagen')->nullable();
            $table->timestamps();
        });
    }
    /**
 * Reverse the migrations.
 */
public function down(): void
{
    Schema::dropIfExists('producto1s');
}

};
