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
        Schema::create('package_incomes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('produk_id');
            $table->string('judul_paket');
            $table->string('deskripsi_paket');
            $table->string('nama_produk');
            $table->integer('qty_produk');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('package_incomes', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('user_roles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('produk_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_incomes');
    }
};
