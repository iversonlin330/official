@extends('layouts.dashboard')
@section('page_heading','簡章預覽')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            簡章預覽
        </div>
        <div class="panel-body">
			<table class="table table-bordered">
				<tbody>
					<tr>
						<td style="font-weight: bold;width:25%;">比賽名稱</td>
						<td style="width:75%;">{{$game->name}}</td>
					</tr>
					<tr>
						<td style="font-weight: bold;width:25%;">比賽簡稱</td>
						<td style="width:75%;">{{$game->nickname}}</td>
					</tr>
					<tr>
						<td style="font-weight: bold;width:25%;">主旨</td>
						<td style="width:75%;">{{$game->subject}}</td>
					</tr>
					<tr>
						<td style="font-weight: bold;width:25%;">主辦單位</td>
						<td style="width:75%;">
							<ul>
								@foreach($game->organizers as $organizer)
									<li><a href="#">{{$organizer->organizer->name}}</a></li>
								@endforeach
							<ul>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;width:25%;">執行單位</td>
						<td style="width:75%;">
							<ul>
								@foreach($game->co_organizers as $co_organizer)
									<li><a href="#">{{$co_organizer->co_organizer->name}}</a></li>
								@endforeach
							<ul>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;width:25%;">贊助／協辦單位</td>
						<td style="width:75%;">
							<ul>
								@foreach($game->sponsors as $sponsor)
									<li><a href="#">{{$sponsor->sponsor->name}}</a></li>
								@endforeach
							<ul>
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;width:25%;">報名開始日期</td>
						<td style="width:75%;">{{$game->start_date}}</td>
					</tr>
					<tr>
						<td style="font-weight: bold;width:25%;">報名結束日期</td>
						<td style="width:75%;">{{$game->end_date}}</td>
					</tr>
					<tr>
						<td style="font-weight: bold;width:25%;">比賽日期</td>
						<td style="width:75%;">{{$game->game_date}}</td>
					</tr>
					<tr>
						<td style="font-weight: bold;width:25%;">比賽地點</td>
						<td style="width:75%;">{{$game->place}}</td>
					</tr>
					<tr>
						<td style="font-weight: bold;width:25%;">比賽組別</td>
						<td style="width:75%;">
							<ul class="nav nav-tabs">
								@foreach($game->groups as $group)
								<li class="{{($group->group_name == 'A')? 'active' : ""}}"><a href="#{{$group->group_name}}" data-toggle="tab">{{$group->group_name}}組</a>
								@endforeach
                            </ul>
							<div class="tab-content">
								@foreach($game->groups as $group)
								<div class="tab-pane fade in {{($group->group_name == 'A')? "active" : ""}}" id="{{$group->group_name}}">
                                    <ul>
									<li>段位限制:{{$group->D_down}}~{{$group->D_up}}段</li>
									<li>名額限制:{{$group->quota}}人</li>
									<li>獎金(1~16名)
										<ol>
										@for($i=1;$i<=16;$i++)
											<?php
												$bonus = 'bonus_'.$i;
											?>
											<li>${{$group->$bonus}}元</li>
										@endfor
										</ol>
									</li>
								</ul>
                                </div>
								@endforeach
                            </div>
							@if(0)
							@foreach($game->groups as $group)
							<h4>{{$group->group_name}}組</h4>
							<ul>
                                <li>段位限制:{{$group->D_down}}~{{$group->D_up}}段</li>
								<li>名額限制:{{$group->quota}}人</li>
                                <li>獎金
									<ol>
									@for($i=1;$i<=16;$i++)
										<?php
											$bonus = 'bonus_'.$i;
										?>
										<li>{{$group->$bonus}}</li>
									@endfor
									</ol>
                                </li>
                                <li>List Item</li>
                            </ul>
							@endforeach
							@endif
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;width:25%;">報名連結</td>
						<td style="width:75%;">{{$game->link}}</td>
					</tr>
					<tr>
						<td style="font-weight: bold;width:25%;">簡章</td>
						<td style="width:75%;">
							@foreach($game->files as $file)
							<a href="{{url('game/download/'.$file->id)}}">{{$file->file_show_name}}</a><br>
							@endforeach
						</td>
					</tr>
				<tbody>
			<table>
        </div>
    </div>
</div>
@section('script')
<script>
    $('table').DataTable();
	var group_array = new Array();
	group_array['A'] = 1;
	group_array['B'] = 2;
	group_array['C'] = 3;
	group_array['D'] = 4;
	group_array['E'] = 5;
	group_array['F'] = 6;
	group_array['G'] = 7;
	group_array['H'] = 8;
	group_array['I'] = 9;
	group_array['J'] = 10;
	$("#chess-group-select").change(function(){
		$("#chess-group").empty();	
		for(var i =0 ;i <= group_array[$(this).val()]; i++){
			var html = $("#chess-group-template").show().clone();
			console.log($(html).find(":contains('A組棋力下限')"));
			$(html).find(":contains('A組棋力下限')").text($(this).val()+'組棋力下限')
			$("#chess-group").html(html);
		}
		console.log($(this).val());
	});
	$('.multi-select').multiselect({
		enableFiltering: true,
        filterBehavior: 'value',
		buttonWidth: '100%',
		nonSelectedText: '請選擇',
	});
</script>
@stop
@stop