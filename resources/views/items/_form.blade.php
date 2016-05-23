<div class="form-group">
	{!! Form::label('code', 'Item Code:') !!}
	{!! Form::text('code', null, ['class' => 'form-control']) !!}			
</div>
<div class="form-group">
	{!! Form::label('name', 'Item Name:') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}			
</div>
<div class="form-group">
	{!! Form::label('status', 'Status:') !!}
	{!! Form::checkbox('status', 1, ['class' => 'checkbox', 'selected' => 'selected']) !!}			
</div>
<div class="form-group">
	<a href="{{ url('/items') }}" class="btn btn-primary btn-default">Cancel</a>
	{!! Form::submit( $submitButtonText, ['class' => 'btn btn-primary btn-default']) !!}
</div>