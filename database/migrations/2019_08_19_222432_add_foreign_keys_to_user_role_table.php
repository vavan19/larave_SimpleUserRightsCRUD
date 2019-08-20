<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToUserRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_role', function ($table) {
            $table->foreign('user_id', 'user_role_user_id_fk')->references('id')->on('users');
            $table->foreign('role_id', 'user_role_role_id_fk')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_role', function (Blueprint $table) {
            $table->dropForeign('user_role_user_id_fk');
            $table->dropForeign('user_role_role_id_fk');
        });
    }
}
