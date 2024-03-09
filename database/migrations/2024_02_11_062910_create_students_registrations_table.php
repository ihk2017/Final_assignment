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
        Schema::create('students_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('sname')->nullable();
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('address')->nullable();
            $table->string('profession')->nullable(); 
            $table->string('mobile')->nullable(); 
            $table->string('email')->nullable();
            $table->string('sscpasyr')->nullable();
            $table->string('edugroup')->nullable();
            $table->string('regno')->nullable();
            $table->string('picture')->nullable();
            $table->string('regfees')->nullable();
            $table->string('qty')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
            ->cascadeOnUpdate()->restrictOnDelete();

            $table->index('sname');
            $table->index('mobile');
            $table->index('sscpasyr');
            $table->index('edugroup');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_registrations');
    }
};
