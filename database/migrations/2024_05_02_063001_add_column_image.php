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
        Schema::table('table_points', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
        Schema::table('table_polylines', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
        Schema::table('table_polygons', function (Blueprint $table) {
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //drop column image
        Schema::table('table points', function (Blueprint $table) {
            $table->dropColumn('image');
        });
        //drop column image
        Schema::table('table polylines', function (Blueprint $table) {
            $table->dropColumn('image');
        });
        //drop column image
        Schema::table('table polygons', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
};
