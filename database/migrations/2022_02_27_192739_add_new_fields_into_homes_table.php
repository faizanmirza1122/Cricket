<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsIntoHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('homes', function (Blueprint $table) {
            $table->string('category');
            $table->string('slug')->nullable();
            $table->string('body_image')->nullable();
            $table->longText('description_under_image')->nullable();
            $table->dropColumn('subtitle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('homes', function($table) {
            $table->dropColumn('category');
            $table->dropColumn('slug');
            $table->dropColumn('body_image');
            $table->dropColumn('description_under_image');
        });
    }
}
