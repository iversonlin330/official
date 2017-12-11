@extends('layouts.dashboard')
@section('page_heading','課程報名')
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
            課程報名
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>課程或營隊</th>
                        <th>任課老師或單位</th>
                        <th>活動時間</th>
                        <th>報名</th>
                    </tr>
                </thead>
                <tbody>
					<tr>
						<td>新北新店七張教室</td>
						<td>林羽揚</td>
						<td>2018-07-31</td>
						<td>人數已滿</td>
					</tr>
					<tr>
						<td>暑期象棋研習營</td>
						<td>台灣棋牌競技協會</td>
						<td>2018-07-31</td>
						<td><a href=''>點選報名</a></td>
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