@extends('admin.master')
@section('content')

<table class="table table-responsive">
	<tr>
		<th>id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Batch</th>
		<th>Gender</th>
		<th>Phone</th>
		<th>Description</th>
		<th>Action</th>
	</tr>
	@foreach($allalumni as $row)
	<tr>
		<td>{{$row->id}}</td>
		<td>{{$row->name}}</td>
		<td>{{$row->email}}</td>
		<td>{{$row->batch}}</td>
		<td>{{$row->gender}}</td>
		<td>{{$row->phone}}</td>
		<td>{{$row->description}}</td>
		<td>
			<a href="{{URL::to('viewsingle/'.$row->id)}}" class="btn btn-sm btn-success">See Profile</a>
		</td>
	</tr>
	@endforeach
</table>
@endsection('content')