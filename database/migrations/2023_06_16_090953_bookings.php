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
        //
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_id');
            $table->string('fullname');
            $table->bigInteger('phone');
            $table->string('car_name');
            $table->string('car_price');
            $table->string('hire_duration');
            $table->string('total_price');
            $table->string('status');
            $table->string('status_state');
            $table->date('booked_to');
            $table->timestamps();
            $table->string('diff');
        }
                );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('bookings');

    }
};
