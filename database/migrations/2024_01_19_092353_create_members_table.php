<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->json('informations');
            $table->boolean('state')->default(1);
            $table->unsignedBigInteger('id_clan');
            $table->foreign('id_clan')->references('id')->on('clans');
            $table->unsignedBigInteger('id_user')->default(1);
            $table->foreign('id_user')->references('id')->on('users');
            $table->date('date');
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
        Schema::dropIfExists('members');
    }
}
