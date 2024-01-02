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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->foreignId('client_id');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('remark')->nullable();
            $table->timestamps();
        });

        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('remark')->nullable();
            $table->timestamps();
        });

        Schema::create('memos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('machine_id');
            $table->date('date');
            $table->text('content');
            $table->foreignId('user_id');
            $table->timestamps();
        });

        Schema::create('histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('machine_id');
            $table->foreignId('state_id');
            $table->foreignId('location_id');
            $table->foreignId('site_id')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('stuff')->nullable();
            $table->foreignId('user_id');
            $table->text('remark')->nullable();
            $table->timestamps();
        });

        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('remark')->nullable();
            $table->timestamps();
        });

        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('remark')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sites');
        Schema::dropIfExists('clients');
        Schema::dropIfExists('memos');
        Schema::dropIfExists('histories');
        Schema::dropIfExists('states');
        Schema::dropIfExists('places');
    }
};
