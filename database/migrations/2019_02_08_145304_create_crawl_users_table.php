<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrawlUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crawl_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('screen_name');
            $table->string('user_name');
            $table->string('followers_count');
            $table->string('friends_count');
            $table->string('statuses_count');
            $table->text('tweet');
            $table->text('tweet_created_at');
            $table->string('source');
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
        Schema::dropIfExists('crawl_users');
    }
}
