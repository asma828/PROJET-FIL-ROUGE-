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
        Schema::create('service',function(Blueprint $table){
           $table->id();
           $table->string('name');
           $table->text('description');
           $table->decimal('price', 10, 2);
           $table->string('service_area');
           $table->string('experience_level');
           $table->string('image')->nullable();
           $table->boolean('status')->default(1);
           $table->foreignId('provider_id')->constrained('users')->onDelete('cascade');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
