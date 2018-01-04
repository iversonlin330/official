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
                        <th>主辦單位</th>
                        <th>報名</th>
                    </tr>
                </thead>
                <tbody>
					<tr>
						<td>觀音盃</td>
						<td>高段組</td>
						<td>300,000</td>
						<td>2018-07-31</td>
						<td>棋協</td>
						<td>
						@if(is_null(Auth::user()->player_id))
							<a href="{{url('/user/verify')}}">請先完善基本資料</a>
						@else
							<a href=''>點選報名</a>
						@endif
						</td>
					</tr>
					<tr>
						<td>觀音盃</td>
						<td>段位甲組</td>
						<td>300,000</td>
						<td>2018-07-31</td>
						<td>棋協</td>
						<td><a href=''>點選報名</a></td>
					</tr>
					<tr>
						<td>觀音盃</td>
						<td>段位乙組</td>
						<td>300,000</td>
						<td>2018-07-31</td>
						<td>棋協</td>
						<td>資格不符</td>
					</tr>
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