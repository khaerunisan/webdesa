<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('kotak_sarans', function (Blueprint $table) {
            $table->boolean('status')->default(0); // 0 = belum dibaca, 1 = dibaca
        });
    }

    public function down(): void
    {
        Schema::table('kotak_sarans', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
