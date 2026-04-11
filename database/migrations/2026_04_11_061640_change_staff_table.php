<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('DROP TABLE IF EXISTS positions CASCADE');
        Schema::table('staff', function (Blueprint $table) {
            $table->dropColumn(['mail', 'is_visible', 'positions_id']);
            $table->string("position", 35)->nullable();
            $table->string("avatar_root")->nullable();
            $table->string("phone")->nullable(false)->change();
        });
        Schema::dropIfExists('positions');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->timestamps();
        });
        Schema::table('staff', function (Blueprint $table) {
            $table->dropColumn('position');
            $table->string("mail", 35)->nullable();
            $table->boolean("is_visible")->default(true);
            $table->foreignId("positions_id")->constrained()->onDelete("cascade");
        });
    }
};
