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
        Schema::create('requestrepairs', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('reg')->nullable();
            $table->string('machine_name')->nullable();
            $table->string('line_name')->nullable();
            $table->string('part_name')->nullable();
            $table->string('part_type')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('maker')->nullable();
            $table->text('problem')->nullable();
            $table->text('detail_standard')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requestrepairs');
    }
};
