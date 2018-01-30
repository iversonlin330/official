@extends('layouts.dashboard')
@section('page_heading','我的比賽')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            我的比賽
        </div>
		<div class="panel-body">
			<table class="table table-bordered">
                <thead>
                    <tr>
                        <th>比賽名稱</th>
                        <th>比賽組別</th>
                        <th>總獎金</th>
                        <th>比賽日期</th>
						<th>報名期限</th>
                    </tr>
                </thead>
				<tbody>
					@foreach($game_signs as $sign)
					<tr>
						<td>{{$sign->game->name}}</td>
						<td>{{$sign->group->group_name}}</td>
						<?php
								$total_bonus = 0;
						?>
						@for($i=1;$i<=16;$i++)
							<?php
								$bonus = 'bonus_'.$i;
								$total_bonus = $total_bonus + $sign->group->$bonus;
							?>
						@endfor
						<td>{{$total_bonus}}元</td>
						<td>{{$sign->game->game_date}}</td>
						<td>{{$sign->game->start_date}}~{{$sign->game->end_date}}</td>
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