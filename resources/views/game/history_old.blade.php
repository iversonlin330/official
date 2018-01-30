@extends('layouts.dashboard')
@section('page_heading','歷年比賽')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
    <div>
        <a class='btn btn-primary'>Upload</a>
    </div><br>
    <div class="panel panel-primary">
        <div class="panel-heading">
            歷年比賽
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>比賽名稱</th>
                        <th>比賽組別</th>
                        <th>冠軍</th>
                        <th>比賽地點</th>
                        <th>日期</th>
						<th>主辦單位</th>
						<th>獎金</th>
                    </tr>
                </thead>
                <tbody>
				@foreach($games as $game)
					<tr>
						<td>{{ $game->name }}</td>
						<td>{{ '高段組' }}</td>
						<td><a href="{{url('/player/dialog/'. $game->champion)}}" data-toggle="modal" data-target="#ajax-modal">{{ ($game->player)? $game->player->name : '' }}</a></td>
						<td>{{ '台灣' }}</td>
						<td>{{ $game->start_date }}</td>
						<td>{{ $game->sponsor }}</td>
						<td>{{ $game->total_bonus }}</td>
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