@extends('layouts.dashboard')
@section('page_heading','棋賽速遞')
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
            棋賽速遞
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>棋手姓名</th>
                        <th>分數</th>
                        <th>等級分變化</th>
                        <th>對戰選手平均分</th>
						<th>棋譜觀看(限付費)</th>
                    </tr>
                </thead>
                <tbody>
					<tr>
						<td>林xx</td>
						<td>17/21</td>
						<td>+14-1=6</td>
						<td>2508</td>
						<td><a href=''>觀看</a></td>
					</tr>
					<tr>
						<td>林oo</td>
						<td>16/21</td>
						<td>+14-3=4</td>
						<td>2510</td>
						<td><a href=''>觀看</a></td>
					</tr>
					<tr>
						<td>林ox</td>
						<td>16/21</td>
						<td>+13-2=6</td>
						<td>2488</td>
						<td><a href=''>觀看</a></td>
					</tr>
                </tbody>
            </table>
			<div>棋譜速遞顯示最近兩周的比賽，各排到前三十名<br>
* (113 位棋手參賽; 84 位棋手沒有顯示. 若要觀看可<a href=''>按此延伸顯示</a>)<br>
<a href=''>點擊觀看對陣表</a><br>
</div>
        </div>
    </div>
</div>
@section('script')
<script>
    $('table').DataTable();
</script>
@stop
@stop