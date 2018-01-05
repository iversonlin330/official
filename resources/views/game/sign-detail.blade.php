@extends('layouts.dashboard')
@section('page_heading',$game->name.'比賽報名資料')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
		{{$game->name}}比賽報名資料
        </div>
        <div class="panel-body">
			<div class='table-responsive'>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>比賽組別</th>
							<th>報名人</th>
							<th>葷素</th>
							<th>電話</th>
							<th>Email</th>
							<th>段位</th>
							<th>報名時間</th>
						</tr>
					</thead>
					<tbody>
					@foreach($game->signs as $sign)
						<tr>
							<td>{{ $sign->group->group_name }}</td>
							<td>{{ $sign->user->real_name }}</td>
							<td>{{ ($sign->user->is_vegetarian)? '素':'葷' }}</td>
							<td>{{ $sign->user->phone }}</td>
							<td>{{ $sign->user->email }}</td>
							<td>{{ $sign->user->D }}</td>
							<td>{{ $sign->created_at }}</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
    </div>
</div>
@section('script')
<script>
    //$('table').DataTable();
</script>
@stop
@stop