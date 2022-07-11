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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id')->constrained('users'); // user
            // $table->foreignId('cooperative_id')->constrained('cooperatives'); // coperative
            $table->foreignId('user_id')
                                ->constrained('users','id')
                                ->onUpdate('cascade')
                                ->onDelete('cascade');;
            $table->foreignId('cooperative_id')
                                ->constrained('cooperatives', 'id')
                                ->onUpdate('cascade')
                                ->onDelete('cascade');

            $table->string('installment_code', 6)->unique();
            $table->string('position')->nullable(); //jabatan
            $table->string('nik', 16);
            $table->string('type_of_work'); // jenis pekerjaan
            $table->bigInteger('big_loan'); // besar pinjaman
            $table->bigInteger('monthly_income'); // penghasilan perbulan
            $table->bigInteger('interest_per_year'); // bunga per tahun
            $table->bigInteger('interest_per_month'); // bunga per bulan
            $table->integer('time_period'); // jangka waktu peminjaman
            $table->integer('installment'); // cicilan
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
        Schema::dropIfExists('loans');
    }
};
