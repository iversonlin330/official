@extends('layouts.dashboard')
@section('page_heading','新增簡章')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            新增簡章
        </div>
        <div class="panel-body">
            <form class="form-horizontal" action="{{Request::url()}}" method='post' enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-sm-2">比賽名稱</label>
					<div class="col-sm-10">
						<input name="name" type="text" class="form-control" placeholder="比賽名稱">
					 </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">比賽簡稱</label>
					<div class="col-sm-10">
						<input name="nickname" type="text" class="form-control" placeholder="比賽簡稱">
					 </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">主旨</label>
					<div class="col-sm-10">
						<input name="subject" type="text" class="form-control" placeholder="主旨">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">主辦單位</label>
					<div class="col-sm-8">
						<select name="organizer[]" class='multi-select' class="form-control" multiple="multiple">
							<option value='新店高中'>新店高中</option>
							<option value='新店高中2'>新店高中2</option>
						</select>
					</div>
					<label class="control-label col-sm-2"><a href='{{url('')}}'>新增主辦單位</a></label>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">執行單位</label>
					<div class="col-sm-8">
						<select name="co_organizer[]" class='multi-select' class="form-control" multiple="multiple">
							<option value='新店高中'>新店高中</option>
							<option value='新店高中2'>新店高中2</option>
						</select>
					</div>
					<label class="control-label col-sm-2"><a href='{{url('')}}'>新增執行單位</a></label>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">贊助／協辦單位</label>
					<div class="col-sm-8">
						<select name="sponsor[]" class='multi-select' class="form-control" multiple="multiple">
							<option value='新店高中'>新店高中</option>
							<option value='新店高中2'>新店高中2</option>
						</select>
					</div>
					<label class="control-label col-sm-2"><a href='{{url('')}}'>新增協辦單位</a></label>
				</div>
				@if(0)
				<div class="form-group">
					<label class="control-label col-sm-2">比賽棋力分組</label>
					<div class="col-sm-10">
						<select id="chess-group-select" class="form-control">
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="C">C</option>
							<option value="D">D</option>
							<option value="E">E</option>
							<option value="F">F</option>
							<option value="G">G</option>
							<option value="H">H</option>
							<option value="I">I</option>
							<option value="J">J</option>
						</select>
					 </div>
				</div>
				<div id='chess-group-template' hidden>
					<div class="form-group">
						<label class="control-label col-sm-2">A組棋力下限</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" placeholder="A組棋力下限(請填數字)">
						 </div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">A組棋力上限</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" placeholder="A組棋力上限(請填數字)">
						 </div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">A組獎金</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" placeholder="A組獎金(請填數字)">
						 </div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">A組名額上限</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" placeholder="A組名額上限(請填數字)">
						 </div>
					</div>
				</div>
				<div id='chess-group'>
					<div id='chess-group-a'>
					<div class="form-group">
						<label class="control-label col-sm-2">A組棋力下限</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" placeholder="A組棋力下限(請填數字)">
						 </div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">A組棋力上限</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" placeholder="A組棋力上限(請填數字)">
						 </div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">A組獎金</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" placeholder="A組獎金(請填數字)">
						 </div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2">A組名額上限</label>
						<div class="col-sm-10">
							<input type="number" class="form-control" placeholder="A組名額上限(請填數字)">
						 </div>
					</div>
				</div>
				</div>
				@endif
				<div class="form-group">
					<label class="control-label col-sm-2">報名開始日期</label>
					<div class="col-sm-10">
						<input name="start_date" type="date" class="form-control">
					 </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">報名結束日期</label>
					<div class="col-sm-10">
						<input name="end_date" type="date" class="form-control">
					 </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">比賽日期</label>
					<div class="col-sm-10">
						<input name="game_date" type="date" class="form-control">
					 </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">比賽地點</label>
					<div class="col-sm-10">
						<input name="place" type="text" class="form-control" placeholder="比賽地點">
					 </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">報名連結</label>
					<div class="col-sm-10">
						<input name="link" type="text" class="form-control" placeholder="報名連結">
					 </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">簡章上傳</label>
					<div class="col-sm-10">
						<input name="rule" type="file" class="form-control" placeholder="簡章上傳">
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