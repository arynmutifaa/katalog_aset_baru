<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('property_details', function (Blueprint $table) {
            $table->text('gambar')->nullable()->change();
            // atau pakai JSON:
            // $table->json('gambar')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('property_details', function (Blueprint $table) {
            $table->string('gambar')->nullable()->change();
        });
    }
};
