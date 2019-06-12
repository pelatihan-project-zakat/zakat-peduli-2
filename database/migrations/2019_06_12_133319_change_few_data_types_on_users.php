<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeFewDataTypesOnUsers extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('status')->nullable()->change();
            $table->bigInteger('jml_transaksi')->change();
            $table->decimal('total_donasi', 16, 0)->change();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('status')->nullable($value = false)->change();
            $table->string('jml_transaksi')->change();
            $table->string('total_donasi')->change();
        });
    }
}
