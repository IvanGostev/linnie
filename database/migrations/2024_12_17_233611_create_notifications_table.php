<?php

use App\Models\Problem;
use App\Models\Task;
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
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name')->nullable(); // кто принял заявку
            $table->foreignIdFor(User::class)->constrained(); // кому приходит уведомление
            $table->foreignIdFor(Problem::class)->nullable()->constrained();
            $table->foreignIdFor(Task::class)->nullable()->constrained();
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
