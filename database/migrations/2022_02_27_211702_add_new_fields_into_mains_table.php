<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsIntoMainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mains', function($table) {
            $table->string('social_link_icon_class_1')->nullable();
            $table->string('social_link_icon_class_2')->nullable();
            $table->string('social_link_icon_class_3')->nullable();
            $table->string('social_link_icon_class_4')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mains', function($table) {
            $table->$table->dropColumn('social_link_icon_class_1');
            $table->$table->dropColumn('social_link_icon_class_2');
            $table->$table->dropColumn('social_link_icon_class_3');
            $table->$table->dropColumn('social_link_icon_class_4');
        });
    }
}
