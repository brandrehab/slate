<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable(false);
            $table->string('description', 200)->nullable(false);
            $table->unsignedBigInteger('group_id')->nullable(false);
            $table->unsignedBigInteger('fieldtype_id')->nullable(false);
            $table->unsignedInteger('minimum')->nullable(false);
            $table->unsignedInteger('maximum')->nullable(false);
            $table->unsignedInteger('weight')->nullable(false);
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
        Schema::dropIfExists('fields');
    }
}
