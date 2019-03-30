<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInviteesTables extends Migration
{
    public function up()
    {
        Schema::create('invitees', function (Blueprint $table) {

            createDefaultTableFields($table);
            $table->string('name');

        });

        Schema::create('invitee_translations', function (Blueprint $table) {

            createDefaultTranslationsTableFields($table, 'invitee');
            $table->text('bio')->nullable();

        });

        Schema::create('invitee_slugs', function (Blueprint $table) {

            createDefaultSlugsTableFields($table, 'invitee');

        });

    }

    public function down()
    {
        Schema::dropIfExists('invitee_translations');
        Schema::dropIfExists('invitee_slugs');
        Schema::dropIfExists('invitees');
    }
}
