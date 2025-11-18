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
        Schema::table('report_templates', function (Blueprint $table) {
            $table->boolean('share_report_template', )->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('report_templates', function (Blueprint $table) {
            if (Schema::hasColumn('report_templates', 'share_report_template')) {
                $table->dropColumn('share_report_template');
            }
        });
    }
};
