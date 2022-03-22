<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->text('deliver_notes')->nullable();
            $table->text('work_notes')->nullable();
            $table->string('condition')->nullable();
            $table->string('Building')->nullable();
            $table->string('flat')->nullable();
            $table->string('nearest_landmark')->nullable();
            $table->string('landry')->nullable();

            $table->foreignId('district_id')->constrained();

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
        Schema::dropIfExists('clients');
    }
}
