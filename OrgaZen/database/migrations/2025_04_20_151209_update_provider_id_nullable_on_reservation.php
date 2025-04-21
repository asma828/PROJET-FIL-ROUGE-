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
            $table->dropForeign(['provider_id']);
            $table->unsignedBigInteger('provider_id')->nullable()->change();
            $table->foreign(columns: 'provider_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('reservation', function (Blueprint $table) {
            $table->dropForeign(['provider_id']);
            $table->unsignedBigInteger('provider_id')->nullable(false)->change();
            $table->foreign('provider_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
};
