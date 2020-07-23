<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id')->nullable(false);
            $table->unsignedBigInteger('field_id')->nullable(false);
            $table->unsignedBigInteger('node_id')->nullable(false);
            $table->unsignedInteger('weight')->nullable(false);
            $table->string('value', 2000)->nullable(false);
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
        Schema::dropIfExists('texts');
    }
}
