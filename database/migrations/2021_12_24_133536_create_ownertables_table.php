<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnertablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ownertables', function (Blueprint $table) {
            $table->id();
            $table->string('oname');
            $table->string('osurname');
            $table->string('oidnumber');
            $table->string('ocellnum');
            $table->string('omail');
            $table->string('opostal');
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
        Schema::dropIfExists('ownertables');
    }
}
