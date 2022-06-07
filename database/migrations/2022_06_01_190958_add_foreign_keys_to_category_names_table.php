<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCategoryNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('category_names', function (Blueprint $table) {
            $table->foreign(['account_type_id'], 'fk_category_names_account_types1')->references(['id'])->on('account_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_names', function (Blueprint $table) {
            $table->dropForeign('fk_category_names_account_types1');
        });
    }
}
