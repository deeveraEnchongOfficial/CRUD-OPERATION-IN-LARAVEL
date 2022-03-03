@extends('app')

@section('content')
<h1 class="page-header text-center">Laravel Crud Operation</h1>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<h2>Members Table
			<button type="button" data-target="#addnew" data-toggle="modal" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Member</button>
		</h2>
	</div>
</div>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<table class="table table-bordered table-responsive table-striped">
			<thead>
				<th>Fisrtname</th>
				<th>Lastname</th>
				<th>Action</th>
			</thead>
			<tbody>
				@foreach($members as $member)
					<tr>
						<td>{{$member->firstname}}</td>
						<td>{{$member->lastname}}</td>
						<td><a href="#edit{{$member->id}}" data-toggle="modal" class="btn btn-success"><i class='fa fa-edit'></i> Edit</a> <a href="#delete{{$member->id}}" data-toggle="modal" class="btn btn-danger"><i class='fa fa-trash'></i> Delete</a>
							@include('action')
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection