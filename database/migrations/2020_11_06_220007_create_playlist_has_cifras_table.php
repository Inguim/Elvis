<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistHasCifrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlist_has_cifras', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cifra_id')->constrained('cifras');
            $table->foreignId('playlist_id')->constrained('playlists');
            $table->foreignId('user_id')->constrained('users');


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
        Schema::dropIfExists('playlist_has_cifras');
    }
}
