<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToGroupRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('group_role', function (Blueprint $table) {
            $table->foreign('group_id', 'group_role_group_id_fk')->references('id')->on('groups');
            $table->foreign('role_id', 'group_role_role_id_fk')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('group_role', function (Blueprint $table) {
            $table->dropForeign('group_role_group_id_fk');            
            $table->dropForeign('group_role_role_id_fk');
        });
    }
}
