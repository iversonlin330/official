@extends('layouts.dashboard')
@section('page_heading','比賽簡章')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
    <div>
        <a class='btn btn-primary' href="{{url('/game/add-form')}}">上傳比賽簡章</a>
    </div><br>
    <div class="panel panel-primary">
        <div class="panel-heading">
            比賽簡章
        </div>
        <div class="panel-body">
			<div class='table-responsive'>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>比賽名稱</th>
							<th>比賽簡稱</th>
							<th>組別數量</th>
							<th>報名開始日期</th>
							<th>報名結束日期</th>
							<th>比賽日期</th>
							<th>比賽地點</th>
							<th>主辦單位</th>
							<th>協辦單位</th>
							<th>贊助單位</th>
							<th>觀看簡章</th>
							<th>新增修改組別</th>
						</tr>
					</thead>
					<tbody>
					@foreach($games as $game)
						<tr>
							<td>{{ $game->name }}</td>
							<td>{{ $game->nickname }}</td>
							<td>{{ $game->groups->count() }}</td>
							<td>{{ $game->start_date }}</td>
							<td>{{ $game->end_date }}</td>
							<td>{{ $game->game_date }}</td>
							<td>{{ $game->place }}</td>
							<td>{{ $game->organizer }}</td>
							<td>{{ $game->co_organizer }}</td>
							<td>{{ $game->sponsor }}</td>
							<th><a href="{{('/game/overview/'.$game->id)}}" class="btn btn-xs btn-primary">觀看簡章</a></th>
							<th><a href="{{('/game/add-group/'.$game->id)}}" class="btn btn-xs btn-primary">新增組別</a></th>
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
    $('table').DataTable();
</script>
@stop
@stop