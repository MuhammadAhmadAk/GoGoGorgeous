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
        Schema::table('services', function (Blueprint $table) {
            $table->index(['status', 'order'], 'services_status_order_idx');
        });

        Schema::table('galleries', function (Blueprint $table) {
            $table->index(['status', 'order'], 'galleries_status_order_idx');
        });

        Schema::table('teams', function (Blueprint $table) {
            $table->index(['status', 'order'], 'teams_status_order_idx');
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->index(['status', 'order'], 'testimonials_status_order_idx');
        });

        Schema::table('faqs', function (Blueprint $table) {
            $table->index(['status', 'order'], 'faqs_status_order_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropIndex('services_status_order_idx');
        });

        Schema::table('galleries', function (Blueprint $table) {
            $table->dropIndex('galleries_status_order_idx');
        });

        Schema::table('teams', function (Blueprint $table) {
            $table->dropIndex('teams_status_order_idx');
        });

        Schema::table('testimonials', function (Blueprint $table) {
            $table->dropIndex('testimonials_status_order_idx');
        });

        Schema::table('faqs', function (Blueprint $table) {
            $table->dropIndex('faqs_status_order_idx');
        });
    }
};
