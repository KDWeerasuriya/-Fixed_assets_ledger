<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControllerAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controller_accounts', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('category_name_id')->index('fk_controller_accounts_category_names1_idx');
            $table->string('name', 45);
            $table->integer('status');
            $table->string('remarks', 45)->nullable();
            $table->string('created_by', 45)->nullable();
            $table->string('created_at', 45)->nullable();
            $table->string('updated_by', 45)->nullable();
            $table->string('updated_at', 45)->nullable();
            $table->integer('code');

            $table->primary(['id', 'category_name_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('controller_accounts');
    }
}
