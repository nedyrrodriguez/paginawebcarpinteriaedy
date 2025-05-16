<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDefaultToCantidadInProducto1sTable extends Migration
{
    public function up()
    {
        Schema::table('producto1s', function (Blueprint $table) {
            $table->integer('cantidad')->default(0)->change();
        });
    }

    public function down()
    {
        Schema::table('producto1s', function (Blueprint $table) {
            $table->integer('cantidad')->default(null)->change();
        });
    }
}
