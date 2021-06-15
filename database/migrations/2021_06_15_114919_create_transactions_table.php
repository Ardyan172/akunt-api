<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// class ini dibuat di Command Line menggunakan perintah
// php artisan make:model transaction -m
class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->double('amount');
            // double bisa diisi dengan jumlah nilai yang memiliki koma misalnya 1.500
            // amount berarti jumlah
            $table->timestamp('time')->default(now());
            $table->enum('type', ['expense', 'revenue']);
            // enum berarti column yang hanya bisa diisi dengan nilai yang didefinisikan
            // expense berarti pengeluaran dan revenue berarti pendapatan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
