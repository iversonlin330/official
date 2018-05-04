@extends('layouts.dashboard')
@section('page_heading','更新Excel')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
    <!-- /.row -->
    <div class="col-sm-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                選手排行榜
            </div>
            <div class="panel-body">
                <form action='{{Request::url()}}' method='post' enctype="multipart/form-data">
						<span style="color:red;">注意:匯入後將會將已存在的資料覆蓋，請確認檔案無誤再進行匯入</span>
						<input class="form-control" type="file" name="import_file"/>					
					<div style="float:right ">
						<button class="btn btn-success" data-dismiss="modal" aria-label="Close">Cancel</button>
						<button type='submit' class="btn btn-primary">Submit</button>
					</div>
				</form>	
            </div>
        </div>
    </div>
    <!-- /.row -->
@section('script')
<script>
    
</script>
@stop
@stop