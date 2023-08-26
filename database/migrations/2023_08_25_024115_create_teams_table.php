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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('abbreviation', 10);
            $table->timestamps();
        });

        Schema::table('tasks', function (Blueprint $table) {
            $table->foreignId('team_id')->constrained();
        });

        Schema::table('statuses', function (Blueprint $table) {
            $table->foreignId('team_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('team_id');
        });
        Schema::table('statuses', function (Blueprint $table) {
            $table->dropColumn('team_id');
        });
        Schema::dropIfExists('teams');
    }
};
