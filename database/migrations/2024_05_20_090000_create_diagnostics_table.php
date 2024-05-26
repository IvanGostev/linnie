<?php

use App\Models\Period;
use App\Models\User;
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
        Schema::create('diagnostics', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained();
            $table->foreignIdFor(Period::class)->constrained();
            $table->string('number')->nullable();
            $table->text('opinion')->nullable();
            $table->text('malfunctions')->nullable();
            $table->text('representative')->nullable();
            $table->text('our_representative')->nullable();
            $table->integer('skpb_first')->default(0);
            $table->integer('skpb_second')->default(0);
            $table->integer('skpb_third')->default(0);
            $table->integer('stv_first')->default(0);
            $table->integer('stv_second')->default(0);
            $table->integer('stv_third')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnostics');
    }
};
