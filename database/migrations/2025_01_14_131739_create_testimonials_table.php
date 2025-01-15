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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->text('featured_image')->nullable();
            $table->string('name',100);
            $table->string('course_id',100);
            $table->string('dasignation',200);
            $table->integer('placed_at')->nullable();
            $table->text('comment');
            $table->text('video')->nullable();
            $table->string('model')->nullable();
            $table->string('model_id')->nullable();
            $table->enum('status', ['0', '1'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
