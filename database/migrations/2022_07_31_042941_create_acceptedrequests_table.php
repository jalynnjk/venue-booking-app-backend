<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accepted_requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('client_name');
            $table->string('client_email');
            $table->date('wedding_date');
            $table->integer('budget');
            $table->integer('number_guests');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acceptedrequests');
    }
};
