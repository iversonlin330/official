@extends('layouts.dashboard')
@section('page_heading','棋手資訊')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
.reward-group .btn {
    margin-bottom: 5px; 
}
</style>
<div class="col-md-12">
	<div class="col-md-2">
			<img style='max-width: 100%;' src="{{$player->pic_url}}" alt="">
	</div>
	<div class="col-md-3">
		<div class="h5">姓名:{{$player->name}}</div>
		<div class="h5">段位(升段年):{{$player->D}}({{$player->d_year}})</div>
		<div class="h5">出生時:{{$player->birth_year}}年</div>
		<div class="h5">出生地:{{$player->birth_place}}</div>
		<div class="h5">大學:{{$player->university}}</div>
		<div class="h5">研究所:{{$player->institute}}</div>
	</div>
	<div class="col-md-7 reward-group">
		@foreach($player->player_game as $game)
			<a class='btn btn-warning'>{{$game->year}}-{{$game->name}}-{{$game->rank}}</a>
		@endforeach
		@if(0)
		<a class='btn btn-warning'>1993-新莊盃-冠軍</a>
		<a class='btn btn-warning'>1996-觀音盃-亞軍</a>
		<a class='btn btn-warning'>1999-佛乘盃-亞軍</a>
		<a class='btn btn-warning'>2000-陽信盃-亞軍</a>
		<a class='btn btn-warning'>2001-陽信盃-名人</a>
		<a class='btn btn-warning'>2001-觀音盃-冠軍</a>
		<a class='btn btn-warning'>2002-觀音盃-亞軍</a>
		<a class='btn btn-warning'>2003-陽信盃-亞軍</a>
		<a class='btn btn-warning'>2012-觀音盃-季軍</a>
		<div class="h2">觀音盃(2011)<br>勝率王</div>
	@endif
	</div>
</div>
<div class="col-md-12">
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>時間</th>
					<th>比賽</th>
					<th>名次</th>
					<th>備註</th>
				</tr>
			</thead>
			<tbody>
				@foreach($player->player_d as $d)
					<tr>
						<td>{{$d->year}}</td>
						<td>{{$d->name}}</td>
						<td>{{$d->d}}</td>
						<td>{{$d->note}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<div class="col-md-12" hidden>
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>年份</th>
					<th>年齡</th>
					<th>隊伍</th>
					<th>出賽</th>
					<th>勝</th>
					<th>和</th>
					<th>敗</th>
					<th>積分</th>
					<th>穩定</th>
					<th>防守</th>
					<th>失誤</th>
					<th>得分</th>
					<th>違規</th>
					<th>棄賽</th>
				</tr>
			</thead>
			<tbody>
				<tr class="warning">
					<td>2017</td>
					<td>51</td>
					<td>雙和</td>
					<td>3</td>
					<td>3</td>
					<td>0</td>
					<td>0</td>
					<td>9</td>
					<td>--</td>
					<td>--</td>
					<td>--</td>
					<td>--</td>
					<td>--</td>
					<td>--</td>
				</tr>
				@if(0)
				<tr class="info">
					<td>2015</td>
					<td>30</td>
					<td>xxx</td>
					<td>1</td>
					<td>3</td>
					<td>0</td>
					<td>3</td>
					<td>6</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>0</td>
					<td>0</td>
				</tr>
				@endif
			</tbody>
		</table>
	</div>
</div>
<div class="col-md-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			Glicko成長曲線
		</div>
		<div id="myfirstchart" style="height: 250px;"></div>
	</div>
</div>
@section('script')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script>
    //$('table').DataTable();
	new Morris.Line({
	  // ID of the element in which to draw the chart.
	  element: 'myfirstchart',
	  // Chart data records -- each entry in this array corresponds to a point on
	  // the chart.
	  data: [
	  @foreach($player->player_score as $score)
		{ game: {{$score->game_order}}, value: {{$score->glicko}} },
	  @endforeach
		{ game: 0, value: 1740 },
		{ game: 1, value: 1747 },
		{ game: 2, value: 1753 },
		{ game: 3, value: 1762 }
	  ],
	  // The name of the data record attribute that contains x-values.
	  xkey: 'game',
	  // A list of names of data record attributes that contain y-values.
	  ykeys: ['value'],
	  // Labels for the ykeys -- will be displayed when you hover over the
	  // chart.
	  labels: ['Glicko'],
	   ymin: 'auto',
		ymax: 'auto',
		parseTime: false,
	});
</script>
@stop
@stop