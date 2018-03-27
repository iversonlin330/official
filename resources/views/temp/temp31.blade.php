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
			<img style='max-width: 100%;' src="/pic/chen.jpg" alt="">
	</div>
	<div class="col-md-3">
		<div class="h5">姓名:陳國興</div>
		<div class="h5">段位(升段年):7(1999)</div>
		<div class="h5">出生時:1967年</div>
		<div class="h5">出生地:台灣</div>
		<div class="h5">大學:交通大學肄業</div>
		<div class="h5">研究所:無</div>
	</div>
	<div class="col-md-7 reward-group">
		<a class='btn btn-warning'>1993-新莊盃-冠軍</a>
		<a class='btn btn-warning'>1996-觀音盃-亞軍</a>
		<a class='btn btn-warning'>1999-佛乘盃-亞軍</a>
		<a class='btn btn-warning'>2000-陽信盃-亞軍</a>
		<a class='btn btn-warning'>2001-陽信盃-名人</a>
		<a class='btn btn-warning'>2001-觀音盃-冠軍</a>
		<a class='btn btn-warning'>2002-觀音盃-亞軍</a>
		<a class='btn btn-warning'>2003-陽信盃-亞軍</a>
		<a class='btn btn-warning'>2012-觀音盃-季軍</a>
		@if(0)
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
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1999</td>
					<td>佛乘盃</td>
					<td>晉陞柒段</td>
				</tr>
				<tr>
					<td>1988</td>
					<td>新秀盃</td>
					<td>晉陞肆段</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="col-md-12">
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