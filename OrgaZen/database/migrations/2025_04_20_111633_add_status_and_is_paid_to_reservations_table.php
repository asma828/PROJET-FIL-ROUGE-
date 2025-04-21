<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('reservation', function (Blueprint $table) {
            $table->enum('status', ['step1', 'step2', 'step3', 'completed'])->default('step1');
            $table->boolean('is_paid')->default(false);
        });
    }

    public function down()
    {
        Schema::table('reservation', function (Blueprint $table) {
            $table->dropColumn(['status', 'is_paid']);
        });
    }
};
