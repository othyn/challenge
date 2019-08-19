<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShareSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('share_sheets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_name'); // Equivalent of varchar(255) not null
            $table->string('friend_name'); // Equivalent of varchar(255) not null
            $table->string('friend_email'); // Equivalent of varchar(255) not null
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('share_sheets');
    }
}
