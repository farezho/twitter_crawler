@extends('layouts.topnav')
@section('content')
	<h3>This is your current home timeline!!</h3>
	<br/><br/>

	@foreach ($stringField as $item)
		<!-- Left-aligned media object -->
		<div class="media">
			<div class="media-left">
				<img src="{!! $item->user->profile_image_url !!}" class="media-object" style="width:60px">
			</div>
			<div class="media-body">
				<h4 class="media-heading"> 
					&commat;{!! $item->user->screen_name !!} 
					<span style="font-size: 12px;"> {!! $item->user->name !!} </span><br/>
				</h4>
				<p>
					<span class="a"> Followers: {!! $item->user->followers_count !!} </span>
					<span class="a"> &nbsp; | &nbsp; Following: {!! $item->user->friends_count !!} </span>
					<span class="a"> &nbsp; | &nbsp; Tweet counts: {!! $item->user->statuses_count !!} </span>
				</p>
				<p> {!! $item->text !!} 
				</p>
				<div>
					@if (!empty($item->extended_entities->media))
		                @foreach ($item->extended_entities->media as $get_media)
		                	@if($get_media->type == 'photo')
		                    	<img id="img-media" src="{!! $get_media->media_url !!}" class="media-object">
		                    @else
		                    	<!-- {{ $get_media->expanded_url }} -->
		                    	<video controls width="320" height="240">
		                    		@foreach($get_media->video_info->variants as $get_vid_url)
										<source src="{!! $get_vid_url->url !!}" type="application/x-mpegURL" autoplay="false">
										<source src="{!! $get_vid_url->url !!}" type="video/mp4" autoplay="false">
										<source src="{!! $get_vid_url->url !!}"  type="video/mp4" autoplay="false">
										<source src="{!! $get_vid_url->url !!}"  type="video/mp4" autoplay="false">
										Your browser does not support the <code>video</code> element.
									@endforeach
								</video>
							@endif
		                @endforeach
            		@endif
				</div>
				<p>
					<span class="b"> {!! $item->created_at !!} </span>
					<span class="b"> &nbsp; | &nbsp; Via: {!! $item->source !!} </span>
				</p>
			</div>
		</div>
		<hr>
		<!-- check mention -->
	 	<!-- @if (!empty($item->entities->user_mentions))
	 		Mention: yes <br/>
	 	@else
	 	 	Mention: no <br/>
	 	@endif -->
    @endforeach
@stop