@extends('app')

@section('content')
	<div class="col-lg-12">
		<h1>Add New Item</h1><hr/>

		{!! Form::open(['url' => 'items']) !!}

			@include ('items._form', ['submitButtonText' => 'Add Item' ])
			
		{!! Form::close() !!}

		@include ('errors.list')
	</div>
@stop
