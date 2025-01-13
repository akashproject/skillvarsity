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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string("first_name",100);
            $table->string("last_name",100);
            $table->string("email",100);
            $table->string("mobile",20);
            $table->string("university",100)->nullable();
            $table->string("latitude",50)->nullable();
            $table->string("longitude",50)->nullable();
            $table->string("utm_source",100)->nullable();
            $table->string("utm_campaign",100)->nullable();
            $table->text('crm_status')->nullable();
            $table->text('whatsApp_status')->nullable();
            $table->text('message_status')->nullable();
            $table->text('mail_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
