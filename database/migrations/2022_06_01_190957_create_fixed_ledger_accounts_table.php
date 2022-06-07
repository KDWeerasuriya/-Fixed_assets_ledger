<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFixedLedgerAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixed_ledger_accounts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('cost')->nullable();
            $table->integer('depreciation_rate')->nullable();
            $table->string('depreciation_method', 45)->nullable();
            $table->string('life_time', 45)->nullable();
            $table->date('date_of_depreciation')->nullable();
            $table->string('status', 45)->nullable();
            $table->string('remarks', 45)->nullable();
            $table->string('account_type', 45)->nullable();
            $table->string('category_code', 45)->nullable();
            $table->string('category_name', 45)->nullable();
            $table->string('main_account_name', 45)->nullable();
            $table->string('main_account_code', 45)->nullable();
            $table->string('ledger_account_code', 45)->nullable();
            $table->string('ledger_account_name', 45)->nullable();
            $table->string('action', 45)->nullable();
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
        Schema::dropIfExists('fixed_ledger_accounts');
    }
}
