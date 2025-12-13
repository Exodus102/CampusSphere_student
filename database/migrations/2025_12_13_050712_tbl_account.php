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
        Schema::create('tbl_account', function (Blueprint $table) {
            $table->id('account_id');
            $table->string('fname', 100);
            $table->string('mname', 100)->nullable();
            $table->string('lname', 100);
            $table->string('email', 100)->unique();
            $table->string('account_password', 255);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
