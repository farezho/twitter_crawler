@extends("layouts.masterLayout")
@section("content")
	<div class="title"> <!-- title m-b-md -->
        <h2>Welcome to Twitter Crawler</h2>
        <h3>with Laravel</h3>
    </div>

    <div class="links">
        <a class="effect-2" href="{{ route('crawlkeyword') }}">Crawling by Keyword</a>
        <a class="effect-2" href="{{ route('crawluser') }}">Crawling by User</a>
        <a class="effect-2" href="{{ route('hometimeline') }}">Home Timeline</a>
        <a class="effect-2" href="{{ route('howto') }}">How to Use</a>
    </div>
@stop