<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInactiveDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('inactive_devices'))
        {
            Schema::create('dashboard.inactive_devices', function (Blueprint $table) {
                $table->increments('id');
                $table->string('date_inactive');
                $table->integer('nombre_inactive');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dashboard.inactive_devices');
    }
}
