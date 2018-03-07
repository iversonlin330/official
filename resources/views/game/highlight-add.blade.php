@extends('layouts.dashboard')
@section('page_heading','新增賽事花絮')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            新增賽事花絮
        </div>
        <div class="panel-body">
            <form class="form-horizontal" action="{{Request::url()}}" method='post' enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-sm-2">標題</label>
					<div class="col-sm-10">
						<input name="name" type="text" class="form-control" placeholder="標題">
					 </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">內容</label>
					<div class="col-sm-10">
						<textarea name="content"></textarea>
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
<script src="https://cdn.ckeditor.com/4.8.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
@stop
@stop