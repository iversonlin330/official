@extends('layouts.dashboard')
@section('page_heading','比賽報名')
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
            比賽報名
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>比賽名稱</th>
                        <th>比賽組別</th>
                        <th>總獎金</th>
                        <th>比賽日期</th>
						<th>報名日期</th>
						@if(0)
                        <th>主辦單位</th>
					@endif
						<th>段位限制</th>
						<th>名額</th>
                        <th>報名</th>
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
							<td>{{$game->game_date}}</td>
							<td>{{$game->start_date}}~{{$game->end_date}}</td>
							@if(0)
							<td>棋協</td>
						@endif
							<td>{{$group->D_down}}~{{$group->D_up}}段</td>
							<td>{{$group->signs->count()}}/{{$group->quota}}</td>
							<td>
							@if(strtotime("now") < strtotime($game->start_date) 
							|| strtotime("now") > strtotime($game->end_date))
								報名時間已過/未到
							@else
								@if($group->signs->count() >= $group->quota)
									名額已滿
								@else
									@if($user)
										@if(is_null($user->player_id))
											<a href="{{url('/user/verify')}}">請先完善基本資料</a>
										@else
											@if($game->has_sign($user->id)->count() > 0)
												你已報名過
											@else
												@if($user->D >= $group->D_down && $user->D < $group->D_up)
													<a href="{{url('/game/sign-up/'.$group->id)}}" data-toggle="modal" data-target="#ajax-modal">點選報名</a>
												@else
													段位資格不符
												@endif
											@endif
										@endif
									@else
										請先登入
									@endif
								@endif
							@endif
							</td>
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