<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('installments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('loan_id')->constrained('loans', 'id');
            $table->date('pay_date'); // tanggal bayar
            $table->integer('installment_to'); //angsuran ke -
            $table->integer('installment_amount'); // jumlah angsuran / bunga
            $table->integer('total_installment')->comment('total angsuran'); // total angsuran dibayar
            $table->integer('remaining_installments'); // sisa angsuran pinjaman
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
        Schema::dropIfExists('installments');
    }
};
