@extends('admin.partials.layout')

@section('content')
<div class="row">
	<div class="col-md-12">	
		<div class="panel">
			<div class="panel-heading">
				<div class="panel-title">User List</div>
			</div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>SL</th>
							<th>Name</th>
							<th>Email</th>
							<th>Status</th>
							<th>Role</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($users as $k => $user)
							<tr>
								<td>{{$k+1}}</td>
								<td>{{$user->name}}</td>
								<td>{{$user->mobile}}</td>
								<td>{!! h_status($user->status)!!}</td>
								<td>{{$user->user_role->role->role_name}}</td>
								<td>
									<div class="btn-group">
										<a href="" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>
										<a href="" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
									</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@stop