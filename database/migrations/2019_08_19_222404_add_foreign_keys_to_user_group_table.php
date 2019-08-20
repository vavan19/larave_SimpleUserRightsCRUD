<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToUserGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_group', function ($table) {
            $table->foreign('user_id', 'user_group_user_id_fk')->references('id')->on('users');
            $table->foreign('group_id', 'user_group_group_id_fk')->references('id')->on('groups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_group', function (Blueprint $table) {
            $table->dropForeign('user_group_user_id_fk');
            $table->dropForeign('user_group_group_id_fk');
        });
    }
}
