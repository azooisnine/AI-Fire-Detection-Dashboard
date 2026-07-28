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
        Schema::create('fire_statuses', function (Blueprint $table) {

            $table->id();

            $table->string('status');

            $table->float('confidence');

            $table->integer('person')->default(0);

            $table->string('system')->default('NONAKTIF');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fire_statuses');
    }
};
