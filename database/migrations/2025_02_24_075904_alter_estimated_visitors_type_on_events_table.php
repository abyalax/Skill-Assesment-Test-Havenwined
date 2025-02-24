<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::table('events', function (Blueprint $table) {
            // Pastikan kolom yang diubah sebelumnya kompatibel, bisa menggunakan modify (tergantung driver DB)
            $table->integer('estimated_visitors')->change();
        });
    }

    public function down() {
        Schema::table('events', function (Blueprint $table) {
            $table->string('estimated_visitors')->change();
        });
    }
};