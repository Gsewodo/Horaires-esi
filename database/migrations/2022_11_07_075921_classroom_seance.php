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
        Schema::create('ClassroomSeance', function (Blueprint $table) {
            $table->increments('id');
            $table->string("idClassRoom")->length(10)->foreignId()->references("idClassRoom")->on("classroom");
            $table->foreignId("idSeance")->references("idSeance")->on("Seances")->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ClassroomSeance');
    }
};
