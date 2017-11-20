@extends('layouts.dashboard')
@section('page_heading','歷史賽事')
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
            Game info
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Total bonus</th>
                        <th>Champion</th>
                        <th>Sponsor</th>
                    </tr>
                </thead>
                <tbody>
				@foreach($games as $game)
					<tr>
						<td>{{ $game->start_date }}</td>
						<td>{{ $game->name }}</td>
						<td>{{ $game->total_bonus }}</td>
						<td><a href="{{url('/player/dialog/'. $game->champion)}}" data-toggle="modal" data-target="#ajax-modal">{{ $game->player->name }}</a></td>
						<td>{{ $game->sponsor }}</td>
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