@extends('app')

@section('content')
	<div class="col-lg-12">
		<h1>Items</h1>
		@if (count($items))
			<div class="panel panel-default">	  
				<div class="panel-heading">
					<h3 class="panel-title">Items List</h3>	
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No:</th>
								<th>Code</th>
								<th>Item Name</th>
								<th>Created At</th>
								<th>Published At</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($items as $key => $item)
								<tr>
									<td>{{ ++$key }}</td>
									<td>{{ $item->code }}</td>
									<td>{{ $item->name }}</td>
									<td>{{ $item->created_at }}</td>
									<td>{{ $item->published_at }}</td>
								</tr>
							@endforeach
						</tbody>
					</table>			
				</div>
			</div>
		@else
			<a href="{{ url('items/create') }}">Add new Item</a>
		@endif
	</div>
@stop
