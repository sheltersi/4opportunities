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
        Schema::table('users', function (Blueprint $table) {
            // Rename name to first_name and add last_name
            $table->renameColumn('name', 'first_name');
            $table->string('last_name')->after('first_name');

            // Add role enum
            $table->enum('role', ['candidate', 'precinct_manager', 'super_admin'])
                  ->default('candidate')
                  ->after('password');

            // Add soft deletes
            $table->softDeletes()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropSoftDeletes();
            $table->dropColumn('role');
            $table->dropColumn('last_name');
            $table->renameColumn('first_name', 'name');
        });
    }
};
