<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Thujohn\Twitter\Facades\Twitter;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

use Session;
use App\CrawlUser, App\CrawlKeyword;

class SearchTweetController extends Controller
{
    public function byKeyword(Request $request)
    {
        //Validation
        $messages = array(
            'input' => 'Max characters of keyword is 55',
            'counts.max' => 'Sorry, max tweets that you can crawl is 100',
            'counts.min' => 'Sorry, at least crawl 5 tweets'
        );
        $validation = Validator::make($request->all(), [
            'input' => 'required|min:5|max:55',
            'counts' => 'required|numeric|max:100'
        ],$messages);

        //checl if it fails
        if ($validation->fails()) {
            return redirect()->back()->withInput()->with('errors',$validation->errors());
        }

    	// this will return json
    	$ini = Twitter::getSearch(['q' => "$request->input", 'count' => "$request->counts", 'format' => 'json']);
		// dd($ini);

		// this will decode json above
		$stringField = json_decode($ini,true);

        if ($request->optradio == "yes") {
            foreach ($stringField['statuses'] as $item) {
                CrawlKeyword::create(['screen_name' => $item['user']['screen_name'], 'user_name' => $item['user']['name'], 'followers_count' => $item['user']['followers_count'], 'friends_count' => $item['user']['friends_count'], 'statuses_count' => $item['user']['statuses_count'], 'tweet' => $item['text'], 'tweet_created_at' => strip_tags($item['created_at']), 'source' => strip_tags($item['source']) ]);
            }
            Session::flash('notice','Data successfully added to Db!');
            return redirect()->route('insertcrawlkeyword')->with("stringField",$stringField);
        }
        
		// dd($stringField);
		return view("shared.listCrawlKeyword")->with("stringField",$stringField);
    }

    public function byUser(Request $request)
    {
    	// dd($request->optradio);

        //Validation
        $messages = array(
            'input' => 'Max characters of username is 55',
            'counts.max' => 'Sorry, max tweets that you can crawl is 100',
            'counts.min' => 'Sorry, at least crawl 5 tweets'
        );
        $validation = Validator::make($request->all(), [
            'input' => 'required|min:5|max:55',
            'counts' => 'required|numeric|max:100'
        ],$messages);

        //checl if it fails
        if ($validation->fails()) {
            return redirect()->back()->withInput()->with('errors',$validation->errors());
        }

    	// this will return json
    	$ini = Twitter::getUserTimeline(['screen_name' => "$request->input", 'count' => "$request->counts", 'format' => 'json']);
    	
    	// this for decode json above 
    	$stringField = json_decode($ini,true);

        if ($request->optradio == "yes") {
            foreach ($stringField as $item) {
                CrawlUser::create(['screen_name' => $item['user']['screen_name'], 'user_name' => $item['user']['name'], 'followers_count' => $item['user']['followers_count'], 'friends_count' => $item['user']['friends_count'], 'statuses_count' => $item['user']['statuses_count'], 'tweet' => $item['text'], 'tweet_created_at' => strip_tags($item['created_at']), 'source' => strip_tags($item['source']) ]);
            }
            Session::flash('notice','Data successfully added to Db!');
            return redirect()->route('insertcrawluser')->with("stringField",$stringField);
        }

    	// dd($stringField);
		return view("shared.listCrawlUser")->with("stringField",$stringField);
    }

    public function homeTimeline()
    {
    	// this will return json
    	$ini = Twitter::getHomeTimeline(['count' => 50, 'include_entities' => 'true', 'format' => 'json']);

    	// this will decode json above
        $stringField = json_decode($ini);
        // dd($stringField); // same as vardump   

    	return view("shared.listHomeTimeline")->with("stringField",$stringField);
    }
}
