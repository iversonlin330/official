@extends('layouts.dashboard')
@section('page_heading','比賽資訊')
@section('head')
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css" media="print" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css">
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>

@stop
@section('section')

<div class="col-sm-12">
	@if(Auth::user())
    <div>
        <a class='btn btn-primary' href="{{url('/game/sign-temp-add')}}">新增比賽資訊</a>
    </div><br>
	@endif
    <div class="panel panel-primary">
        <div class="panel-heading">
            比賽資訊
        </div>
        <div class="panel-body">
			<ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#calendar">行事曆</a></li>
			  <li><a data-toggle="tab" href="#list">列表</a></li>
			  
			</ul>
			<div class="tab-content">
			<br>
			  <div id="list" class="tab-pane fade">
			  <div class="table-responsive">
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
							@if(Auth::user())
							<th>修改</th>
							@endif
						</tr>
					</thead>
					<tbody>
						@foreach($games as $game)
							<tr>
								<td>{{$game->game_date}}</td>
								<td>{{$game->week}}</td>
								<td><a href="{{$game->link}}">{{$game->name}}</a></td>
								<td>{{$game->organizer}}</td>
								<td>{{$game->place}}</td>
								<td><a href="{{$game->link}}">{{$game->link}}</a></td>
								<td title="{{$game->user->account}}">{{$game->user->name}}</td>
								@if(Auth::user())
								<td><a class="btn btn-primary">修改</a></td>
								@endif
							</tr>
						@endforeach
					</tbody>
				</table>
				</div>
			  </div>
			  <div id="calendar" class="tab-pane fade in active">
					<div id='calendar2'></div>
					@if(0)
				<ul>
					@foreach($games as $game)
					<li>{{$game->game_date}}&nbsp{{$game->name}}</li>
					@endforeach
				</ul>
				@endif
			  </div>
			</div>	
        </div>
    </div>
</div>
@section('script')
  <script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale/zh-tw.js"></script>

<script>
    $('table').DataTable({
		"order": [[ 0, "desc" ]]
	});
	$(function() {

	  // page is now ready, initialize the calendar...

	$('#calendar2').fullCalendar({
		lang: 'zh-tw',
		defaultView:'listYear',
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'listYear,month'
		 },
		 events:[
			 @foreach($games as $game)
			 {
				 title:"{{$game->name}}",
				 start:"{{$game->game_date}}",
				 url: "{{$game->link}}",
			 },
			 @endforeach
		 ]
	 })

	});
</script>
@stop
@stop