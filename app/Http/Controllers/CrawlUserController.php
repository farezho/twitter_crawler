<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Thujohn\Twitter\Facades\Twitter;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

use Session;
use App\CrawlUser, App\CrawlKeyword;

class CrawlUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->optradio);

        //Validation
        $messages = array(
            'input' => 'Max characters of username is 55',
            'counts.min' => 'Sorry, at least crawl a tweet',
            'counts.max' => 'Sorry, max tweets that you can crawl is 200'
        );

        $validation = Validator::make($request->all(), [
            'input' => 'required|min:5|max:55',
            'counts' => 'required|integer|min:1|max:200'
        ],$messages);

        //checl if it fails
        if ($validation->fails()) {
            // dd('test');
            return redirect()->route('crawluser')->withInput()->with('errors',$validation->errors());
        }else{
            // this will return json
            $ini = Twitter::getUserTimeline(['screen_name' => "$request->input", 'count' => "$request->counts", 'format' => 'json']);
            
            // this for decode json above 
            $stringField = json_decode($ini,true);

            if ($request->optradio == "yes") {
                foreach ($stringField as $item) {
                    CrawlUser::create(['screen_name' => $item['user']['screen_name'], 'user_name' => $item['user']['name'], 'followers_count' => $item['user']['followers_count'], 'friends_count' => $item['user']['friends_count'], 'statuses_count' => $item['user']['statuses_count'], 'tweet' => $item['text'], 'tweet_created_at' => strip_tags($item['created_at']), 'source' => strip_tags($item['source']) ]);
                }
                Session::flash('notice','Data successfully added to Db!');
               
                return view("shared.listCrawlUser")->with("stringField",$stringField);
            }else{
                return view("shared.listCrawlUser")->with("stringField",$stringField);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
