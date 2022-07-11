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
        Schema::create('stashs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                        ->constrained('users','id')
                        ->onUpdate('cascade')
                        ->onDelete('cascade');
            $table->foreignId('cooperative_id')
                        ->constrained('cooperatives', 'id')
                        ->onUpdate('cascade')
                        ->onDelete('cascade');
            $table->string('beginning_balance');
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
        Schema::dropIfExists('stashs');
    }
};
