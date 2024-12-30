<?php 


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateTravelsTable extends Migration
{
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('destination');
            $table->date('departure_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('travels');
    }
}