@extends('app')

@section('content')
	<div class="col-lg-12">
		<h1>Edit: {{ $item->name }}</h1>

		{!! Form::model($item, ['method' => 'PATCH', 'url' => 'items/'.$item->id]) !!}
			
			@include ('items._form', ['submitButtonText' => 'Save Item' ])

		{!! Form::close() !!}
		
		@include ('errors.list')
	</div>
@stop