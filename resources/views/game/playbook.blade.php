@extends('layouts.dashboard')
@section('page_heading','棋譜中心')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            棋譜中心
        </div>
        <div class="panel-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>比賽日期</th>
						<th>比賽名稱</th>
						<th>先手</th>
						<th>後手</th>
						<th>棋譜</th>
					</tr>
				</thead>
				<tbody>
					@foreach($playbooks as $playbook)
					<tr>
						<td>{{$playbook->game_date}}</td>
						<td>{{$playbook->name}}</td>
						<td>
							<a href="{{url('/player/show/'.$playbook->offensive_player_id)}}">{{$playbook->offensive_player->name}}</a>
						</td>
						<td>
							<a href="{{url('/player/show/'.$playbook->defensive_player_id)}}">{{$playbook->	defensive_player->name}}</a>
							</td>
						<td><a class="btn btn-success" href="{{url('/game/playbook-detail/'.$playbook->id)}}">棋譜</a></td>	
					</tr>
					@endforeach
				</tbody>
			</table>
        </div>
    </div>
</div>
@section('script')
<script>
    $('table').DataTable();
</script>
@stop
@stop