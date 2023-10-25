<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            //!!先建立欄位再建立外部鍵

            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            // $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            // $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();
            // $table->foreignId('user_id')->nullable()->constrained()->restrictOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
            //!!先移除外部鍵再移除欄位

            $table->dropForeign(['user_id']);
            $table->dropForeign(['category_id']);
            $table->dropColumn('user_id');
            $table->dropColumn('category_id');
        });
    }
};
