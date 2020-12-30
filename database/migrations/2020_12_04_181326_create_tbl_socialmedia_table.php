<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSocialmediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_socialmedia', function (Blueprint $table) {
            $table->Increments('socialmedia_id');
            $table->string('socialmedia_facebook');
            $table->string('socialmedia_twitter');
            $table->string('socialmedia_linkedin');
            $table->string('socialmedia_website');
            $table->string('socialmedia_whatsapp');
            $table->string('publication_status');
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
        Schema::dropIfExists('tbl_socialmedia');
    }
}
