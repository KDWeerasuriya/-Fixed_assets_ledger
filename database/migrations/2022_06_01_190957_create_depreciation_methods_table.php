<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepreciationMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depreciation_methods', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name', 45);
            $table->integer('status')->nullable();
            $table->string('remarks', 45)->nullable();
            $table->string('created_by', 45)->nullable();
            $table->string('created_at', 45)->nullable();
            $table->string('updated_by', 45)->nullable();
            $table->string('updated_at', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('depreciation_methods');
    }
}
