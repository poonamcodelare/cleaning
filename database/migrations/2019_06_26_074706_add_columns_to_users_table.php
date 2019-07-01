<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('Phone_Number')->after('password');
            $table->string('Address')->after('Phone_Number');
            $table->string('Profile_Image')->nullable()->after('Address');
            $table->integer('Orders')->default(0)->after('Profile_Image');
            $table->string('Payments')->after('Orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('Phone_Number','Address','Profile_Image','Orders','Payments');
        });
    }
}
