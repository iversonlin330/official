@extends('layouts.dashboard')
@section('page_heading','簡章')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
	@if(Auth::user())
    <div>
        <a class='btn btn-primary' href="{{url('/game/sign-temp-add')}}">新增簡章</a>
    </div><br>
	@endif
    <div class="panel panel-primary">
        <div class="panel-heading">
            簡章
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
						<th>日期</th>
						<th>星期</th>
						<th>活動名稱</th>
						<th>主辦單位</th>
						<th>比賽地點</th>
						<th>簡章連結</th>
						<th>修改者</th>
                    </tr>
                </thead>
                <tbody>
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