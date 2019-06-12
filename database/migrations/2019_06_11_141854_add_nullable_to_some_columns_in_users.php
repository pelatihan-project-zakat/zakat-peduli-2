<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNullableToSomeColumnsInUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('status')->nullable()->change();
            $table->string('no_telpon')->nullable()->change();
            $table->string('alamat')->nullable()->change();
            $table->string('jml_transaksi')->nullable()->change();
            $table->string('total_donasi')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('status')->nullable($value = false)->change();
            $table->string('no_telpon')->nullable($value = false)->change();
            $table->string('alamat')->nullable($value = false)->change();
            $table->string('jml_transaksi')->nullable($value = false)->change();
            $table->string('total_donasi')->nullable($value = false)->change();
        });
    }
}
