<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblKhtmynabuwatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_khtmynabuwat', function (Blueprint $table) {
            $table->Increments('khtmynabuwat_id');
            $table->string('khtmynabuwat_title');
            $table->string('khtmynabuwat_detail');
            $table->string('khtmynabuwat_reference');
            $table->string('khtmynabuwat_link');
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
        Schema::dropIfExists('tbl_khtmynabuwat');
    }
}
