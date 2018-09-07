<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->text("address");
            $table->string("phone1")->nullable();
            $table->string("phone2")->nullable();
            $table->string("phone3")->nullable();

            $table->string("email_contact")->nullable();
            $table->string("email_form")->nullable();
            $table->string("skype")->nullable();
            $table->string("fax")->nullable();
            $table->string("fb_link")->nullable();
            $table->string("google_link")->nullable();
            $table->string("youtube_link")->nullable();
            $table->string("instagram_link")->nullable();
            $table->string("linkedin_link")->nullable();

            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
