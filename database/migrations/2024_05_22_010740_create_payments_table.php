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
            $table->bigIncrements('id');
            $table->unsignedInteger(column: 'user_id');
            $table->foreign(columns: 'user_id' )->references(columns:'id')->on(table: 'users');
            $table->string(column: 'stripe_id');
            $table->integer(column:'subtotal');
            $table->integer(column:'tax')->default(value: 0);
            $table->integer(column:'total');
            $table->timestamps();
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
