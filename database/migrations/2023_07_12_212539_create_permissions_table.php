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
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');
            $table->string('name');
            $table->integer('read');
            $table->integer('write');
            $table->integer('updateName');
            $table->integer('addUsers');
            $table->integer('removeUsers');
            $table->integer('updateStatus');
            $table->integer('updatePermissions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
