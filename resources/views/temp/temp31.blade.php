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
			<img style='max-width: 100%;' src="http://3.bp.blogspot.com/-IbEOTNtCMyU/TfCAdHaAxEI/AAAAAAAAA8U/EATib38SSAM/s320/joe-mcelderry.jpg" alt="">
	</div>
	<div class="col-md-3">
		<div class="h5">姓名:林XX</div>
		<div class="h5">段位(升段年):9(2017)</div>
		<div class="h5">出生時:1990/5/5</div>
		<div class="h5">出生地:台灣</div>
		<div class="h5">大學:台灣大學</div>
		<div class="h5">研究所:台灣大學</div>
	</div>
	<div class="col-md-7 reward-group">
		<a class='btn btn-warning'>2006-新店盃-冠軍</a>
		<a class='btn btn-warning'>2008-觀音盃-冠軍</a>
		<a class='btn btn-default'>2010-觀音盃-第八名</a>
		<a class='btn btn-warning'>2011-觀音盃-亞軍</a>
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
			</tbody>
		</table>
	</div>
</div>
@section('script')
<script>
    //$('table').DataTable();
</script>
@stop
@stop