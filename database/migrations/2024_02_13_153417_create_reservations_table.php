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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->timestamp('appointment_time');

            //foreign keys
            $table->integer('treatment_id');
            $table->index('treatment_id');
            $table->foreign('treatment_id')
                ->references('id')
                ->on('treatments')
                ->onDelete('cascade');
            $table->integer('user_id');
            $table->index('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('hairdresser_id');
            $table->index('hairdresser_id');
            $table->foreign('hairdresser_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
