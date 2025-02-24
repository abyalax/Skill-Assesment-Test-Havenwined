<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('content');
            $table->string('category');
            $table->string('theme');
            $table->date('registration_start');
            $table->date('registration_end');
            $table->date('event_start');
            $table->date('event_end');
            $table->string('time');
            $table->string('estimated_visitors')->nullable();
            $table->string('location');
            $table->string('city');
            $table->string('detailed_location');
            // Foreign key untuk company_profile
            $table->foreignId('company_profile_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('events');
    }
};
