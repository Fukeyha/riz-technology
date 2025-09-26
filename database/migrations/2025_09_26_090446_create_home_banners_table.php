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
       Schema::create('home_banners', function (Blueprint $table) {
    $table->id();
    $table->string('image')->nullable(); // background image
    $table->string('heading_line1')->nullable(); // Empowering Businesses
    $table->string('heading_line2')->nullable(); // Through Digital Transformation
    $table->text('description')->nullable(); // Paragraph text
    $table->string('button1_text')->nullable();
    $table->string('button1_link')->nullable();
    $table->string('button2_text')->nullable();
    $table->string('button2_link')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_banners');
    }
};
