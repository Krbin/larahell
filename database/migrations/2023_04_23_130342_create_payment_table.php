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
        Schema::create('payments', function (Blueprint $table) {



            $table->id();
            $table->timestamps();
            $table->string('name', 100);
            $table->float('amount', 10, 2);
            $table->string('payer', 50);
            $table->string('debtors', 255);
            // $table->date('date');
            $table->string('note', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
