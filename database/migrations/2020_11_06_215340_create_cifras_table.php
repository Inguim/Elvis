<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCifrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cifras', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->string('caminho', 45);

            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('autoscroll_id')->constrained('auto_scrolls');

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
        Schema::dropIfExists('cifras');
    }
}
