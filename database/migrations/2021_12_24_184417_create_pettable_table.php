<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePettableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pettable', function (Blueprint $table) {
            $table->id();
            $table->string('pname');
            $table->string('pid');
            $table->string('ptype');
            $table->string('pbreed');
            $table->string('powner');
            $table->string('oidnumber');
            $table->string('pdob');
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
        Schema::dropIfExists('pettable');
    }
}
