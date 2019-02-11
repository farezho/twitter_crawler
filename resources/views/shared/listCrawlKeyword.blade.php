@extends('layouts.topnav')
@section('content')
	<br/><br/><br/>
	<div class="row row-centered">
		<div class="col-md-8 col-centered">
			{!! Form::open(['route' => 'bykeyword.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}
        		@include('shared.form')
    		{!! Form::close() !!}	
		</div>	
	</div>

	@if (Session::has('notice'))
		<strong style="font-family: font-family: 'Exo 2', sans-serif; color: green;">{{Session::get('notice')}}</strong> 
	@endif

	<br/><br/><br/>
	<h3>Hasil Crawling</h3>
	<br/><br/>

	@foreach ($stringField['statuses'] as $item)
		<!-- Left-aligned media object -->
		<div class="media">
			<div class="media-left">
				<img src="{!! $item['user']['profile_image_url'] !!}" class="media-object" style="width:60px">
			</div>
			<div class="media-body">
				<h4 class="media-heading"> 
					&commat;{!! $item['user']['screen_name'] !!} 
					<span style="font-size: 12px;"> {!! $item['user']['name'] !!} </span><br/>
				</h4>
				<p>
					<span class="a"> Followers: {!! $item['user']['followers_count'] !!} </span>
					<span class="a"> &nbsp; | &nbsp; Following: {!! $item['user']['friends_count'] !!} </span>
					<span class="a"> &nbsp; | &nbsp; Tweet counts: {!! $item['user']['statuses_count'] !!} </span>
				</p>
				<p> Tweet: &nbsp; {!! $item['text'] !!} </p>
				<p>
					<span class="b"> {!! $item['created_at'] !!} </span>
					<span class="b"> &nbsp; | &nbsp; Via: {!! $item['source'] !!} </span>
				</p>
			</div>
		</div>
		<hr>
		<!-- check mention -->
	 	<!-- @if (!empty($item['entities']['user_mentions']))
	 		Mention: yes <br/>
	 	@else
	 	 	Mention: no <br/>
	 	@endif -->
	@endforeach

@stop
