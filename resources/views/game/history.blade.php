@extends('layouts.dashboard')
@section('page_heading','歷年比賽')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
	@if(0)
    <div>
        <a class='btn btn-primary'>Upload</a>
    </div><br>
	@endif
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
                        <th>總獎金</th>
						<th>冠軍</th>
                        <th>比賽日期</th>
                        <th>主辦單位</th>
						<th>執行單位</th>
						<th>贊助單位</th>
						<th>段位限制</th>
                    </tr>
                </thead>
                <tbody>
					@foreach($games as $game)
						@foreach($game->groups as $group)
						
						<tr>
							<td>{{$game->name}}</td>
							<td>{{$group->group_name}}</td>
							<?php
									$total_bonus = 0;
							?>
							@for($i=1;$i<=16;$i++)
								<?php
									$bonus = 'bonus_'.$i;
									$total_bonus = $total_bonus + $group->$bonus;
								?>
							@endfor
							<td>{{$total_bonus}}元</td>
							<th>{{$group->game_results->where('rank',1)->first()->player->name or ''}}</th>
							<td>{{$game->game_date}}</td>
							<td>
							@foreach($game->organizers as $organizer)
								{{$organizer->organizer->name}}<br>
							@endforeach
							</td>
							<td>
							@foreach($game->co_organizers as $co_organizer)
								{{$co_organizer->co_organizer->name}}<br>
							@endforeach
							</td>
							<td>
							@foreach($game->sponsors as $sponsor)
								{{$sponsor->sponsor->name}}<br>
							@endforeach
							</td>
							@if(0)
							<td>棋協</td>
						@endif
							<td>{{$group->D_down}}~{{$group->D_up}}段</td>
						</tr>
						@endforeach
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