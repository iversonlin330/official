@extends('layouts.dashboard')
@section('page_heading','新增比賽資訊')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            新增比賽資訊
        </div>
        <div class="panel-body">
            <form class="form-horizontal" action="{{Request::url()}}" method='post' enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-sm-2">日期</label>
					<div class="col-sm-10">
						<input name="game_date" type="date" class="form-control" placeholder="日期">
					 </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">星期</label>
					<div class="col-sm-10">
						<input name="week" type="text" class="form-control" placeholder="星期">
					 </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">活動名稱</label>
					<div class="col-sm-10">
						<input name="name" type="text" class="form-control" placeholder="活動名稱">
					 </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">主辦單位</label>
					<div class="col-sm-10">
						<input name="organizer" type="text" class="form-control" placeholder="主辦單位">
					 </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">比賽地點</label>
					<div class="col-sm-10">
						<input name="place" type="text" class="form-control" placeholder="比賽地點">
					 </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">簡章連結</label>
					<div class="col-sm-10">
						<input name="link" type="text" class="form-control" placeholder="簡章連結">
					 </div>
				</div>
				<div class="form-group">        
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">送出</button>
					</div>
				</div>
			</form>
        </div>
    </div>
</div>
@section('script')
<script>
    
</script>
@stop
@stop