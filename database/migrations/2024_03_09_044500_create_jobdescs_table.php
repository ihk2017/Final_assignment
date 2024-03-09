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
        Schema::create('jobdescs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')
                ->cascadeOnUpdate()->restrictOnDelete();

            $table->string('title',100)->unique();

            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')
                ->cascadeOnUpdate()->restrictOnDelete();

            $table->unsignedBigInteger('jobtype_id');
            $table->foreign('jobtype_id')->references('id')->on('jobtypes')
                ->cascadeOnUpdate()->restrictOnDelete();
            
            $table->string('job_location',100)->nullable();
            $table->string('vacant_qty')->nullable();
            $table->longText('required_edication')->nullable();
            $table->string('min_experiences_yr')->nullable();
            $table->string('salary_range')->nullable();
            $table->longText('benefits')->nullable();
            $table->string('age_limit')->nullable();
            $table->longText('additional_requirement')->nullable();
            $table->longText('responsibilities')->nullable();
            $table->string('employement_status')->default('Full-Time');
            $table->string('last_date')->nullable();
            $table->string('no_off_applicant')->nullable();
                       

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

            $table->index('title');
            $table->index('job_location');
            $table->index('employement_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobdescs');
    }
};
