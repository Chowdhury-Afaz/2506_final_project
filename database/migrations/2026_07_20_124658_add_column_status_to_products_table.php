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
        Schema::table('products', function (Blueprint $table) {
            $table->boolean('status')->default(true)->after('image');
            $table->boolean('featured')->default(false)->after('status');
            $table->date('expiry_date')->nullable()->after('slug');
            $table->enum('unit_type', ['GRAM', 'KG', 'LITER', 'PEICE', 'POUND'])->default('KG')->after('gallery_image'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'status', 'featured', 'expiry_date', 'unit_type'
            ]);
        });
    }
};
