@extends("layouts.topnav")
@section("content")
	<h3>Crawling by username</h3><br/><br/>
	<div class="row row-centered">
		<div class="col-md-8 col-centered">
			{!! Form::open(['route' => 'byuser.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}
        		@include('shared.form')
    		{!! Form::close() !!}	
		</div>	
	</div>
@stop