<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->string('Phone_Number')->after('password');
            $table->string('Address')->after('Phone_Number');
            $table->string('Profile_Image')->after('Address');
            $table->string('Orders')->after('Profile_Image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admins', function (Blueprint $table) {
            Schema::dropIfExists('Phone_Number','Address','Profile_Image','Orders');
        });
    }
}
