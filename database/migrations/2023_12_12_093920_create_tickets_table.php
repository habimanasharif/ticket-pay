<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
             $table->id('ticketID');
    $table->string('ticket_number');
    $table->decimal('amount', 8, 2);
    $table->string('vehicleID');
    $table->string('userID');
    $table->string('officerID');
    $table->string('location');
    $table->string('offence');
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
        Schema::dropIfExists('tickets');
    }
}
