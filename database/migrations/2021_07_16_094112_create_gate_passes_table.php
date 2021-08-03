<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGatePassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gate_passes', function (Blueprint $table) {
            $table->id();
            $table->date('gate_pass_date');
            $table->string('serial')->nullable();
            $table->string('name_of_requester')->nullable();
            $table->string('vehicle_registration')->nullable();
            $table->text('purpose_of_pass')->nullable();
            $table->softDeletes();
            //$table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');;
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
        Schema::dropIfExists('gate_passes');
    }
}
