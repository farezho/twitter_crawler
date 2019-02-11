<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrawlKeyword extends Model
{
    protected $fillable = [
    	'screen_name', 'user_name', 'followers_count', 'friends_count', 'statuses_count', 'tweet', 'tweet_created_at', 'source'
    ];
}
