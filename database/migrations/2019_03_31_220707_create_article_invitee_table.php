<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleInviteeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_invitee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->integer('position')->unsigned();

            createDefaultRelationshipTableFields($table, 'article', 'invitee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_invitee');
    }
}
