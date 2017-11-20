@extends('layouts.modal')
@section('modal-title')
	{{'Player Info'}}
@stop
@section('modal-body')
<div class="row">
	<div class="col-md-12">
		<table class="table table-bordered">
		@if(0)
		<thead>
		<tr><th>#</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Username</th>
		</tr>
		</thead>
		@endif
			<tbody>
				<tr>
					<th scope="row">Name</th>
					<td>{{$player->name}}</td>
				</tr>
				<tr>
					<th scope="row">Elo</th>
					<td>{{$player->name}}</td>
				</tr>
				<tr>
					<th scope="row">D</th>
					<td>{{$player->D}}段</td>
				</tr>
			</tbody>
		</table>
		<div style="float:right ">
			<button id="close_button" class="btn btn-success" data-dismiss="modal" aria-label="Close">Close</button>
			@if(0)
			<button id="add_button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Save</button>
			@endif
		</div>
	</div>
</div>
<script>
</script>
@stop
