@extends('layouts.dashboard')
@section('page_heading','XX討論區')
@section('section')
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            XX討論區
        </div>
        <div class="panel-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>建立日期</th>
					<th>文章標題</th>
					<th>進入</th>
				</tr>
			</thead>
			<tbody>
			<tr>
				<td>2018-03-07</td>
				<td>XXX棋手如何</td>
				<td><a class="btn btn-success" href="{{url('/forum/article-detail')}}">進入</a></td>
			</tr>
			@if(0)
				@foreach($games as $game)
					<tr>
						<td>{{$game->game_date}}</td>
						<td>{{$game->week}}</td>
						<td>{{$game->name}}</td>
						<td>{{$game->organizer}}</td>
						<td>{{$game->place}}</td>
						<td><a href="{{$game->link}}">{{$game->link}}</a></td>
						<td title="{{$game->user->account}}">{{$game->user->name}}</td>
					</tr>
				@endforeach
			@endif
			</tbody>
		</table>
        </div>
    </div>
</div>
@section('script')
<script>
$('table').DataTable({
		"order": [[ 0, "desc" ]]
	});
</script>
@stop
@stop