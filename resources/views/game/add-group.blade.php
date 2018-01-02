@extends('layouts.dashboard')
@section('page_heading','新增組別')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            新增組別
        </div>
        <div class="panel-body">
            <form class="form-horizontal" action="{{Request::url()}}" method='post'>
				<div class="form-group">
					<label class="control-label col-sm-2">棋力下限</label>
					<div class="col-sm-10">
						<input name='D_down' type="number" class="form-control" placeholder="棋力下限(請填數字)">
					 </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">棋力上限</label>
					<div class="col-sm-10">
						<input name='D_up' type="number" class="form-control" placeholder="棋力上限(請填數字)">
					 </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">名額上限</label>
					<div class="col-sm-10">
						<input name='quota' type="number" class="form-control" placeholder="名額上限(請填數字)">
					 </div>
				</div>
				@for($i=1;$i<=16;$i++)
				<div class="form-group">
					<label class="control-label col-sm-2">第{{$i}}名獎金</label>
					<div class="col-sm-10">
						<input name='bonus_{{$i}}' type="number" class="form-control" placeholder="獎金(請填數字)">
					 </div>
				</div>
				@endfor
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
    $('table').DataTable();
	var group_array = new Array();
	group_array['A'] = 1;
	group_array['B'] = 2;
	group_array['C'] = 3;
	group_array['D'] = 4;
	group_array['E'] = 5;
	group_array['F'] = 6;
	group_array['G'] = 7;
	group_array['H'] = 8;
	group_array['I'] = 9;
	group_array['J'] = 10;
	$("#chess-group-select").change(function(){
		$("#chess-group").empty();	
		for(var i =0 ;i <= group_array[$(this).val()]; i++){
			var html = $("#chess-group-template").show().clone();
			console.log($(html).find(":contains('A組棋力下限')"));
			$(html).find(":contains('A組棋力下限')").text($(this).val()+'組棋力下限')
			$("#chess-group").html(html);
		}
		console.log($(this).val());
	});
	$('.multi-select').multiselect({
		enableFiltering: true,
        filterBehavior: 'value',
		buttonWidth: '100%',
		nonSelectedText: '請選擇',
	});
</script>
@stop
@stop