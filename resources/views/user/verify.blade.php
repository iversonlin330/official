@extends('layouts.dashboard')
@section('page_heading','基本資料')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            基本資料
        </div>
        <div class="panel-body">
            <form class="form-horizontal" action="{{Request::url()}}" method='post' enctype="multipart/form-data">
				<div class="form-group">
					<label class="control-label col-sm-2">姓名</label>
					<div class="col-sm-10">
						<input name="real_name" type="text" class="form-control" placeholder="姓名">
					 </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">電話</label>
					<div class="col-sm-10">
						<input name="phone" type="text" class="form-control" placeholder="電話">
					 </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">是否吃素</label>
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" name="is_vegetarian" value="0" checked="true">否
						</label>
						<label class="radio-inline">
							<input type="radio" name="is_vegetarian" value="1" >是
						</label>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">所在地</label>
					<div class="col-sm-10">
						<input name="location" type="text" class="form-control" placeholder="所在地">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">段位</label>
					<div class="col-sm-10">
						<input name="D" type="number" class="form-control" placeholder="段位">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2">請選擇您的名字</label>
					<div class="col-sm-10">
						<select name="player_id" class='multi-select' class="form-control" data-live-search="true">
							<option value='0'>搜尋不到請選此列</option>
							@foreach($players as $player)
								<option value='{{$player->id}}' data-tokens="{{$player->name}}">{{$player->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				@if(0)
				<div class="form-group">
					<label class="control-label col-sm-2">照片上傳</label>
					<div class="col-sm-10">
						<input name="rule" type="file" class="form-control" placeholder="照片上傳">
					</div>
				</div>
				@endif
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
    // $('table').DataTable();
	// var group_array = new Array();
	// group_array['A'] = 1;
	// group_array['B'] = 2;
	// group_array['C'] = 3;
	// group_array['D'] = 4;
	// group_array['E'] = 5;
	// group_array['F'] = 6;
	// group_array['G'] = 7;
	// group_array['H'] = 8;
	// group_array['I'] = 9;
	// group_array['J'] = 10;
	// $("#chess-group-select").change(function(){
		// $("#chess-group").empty();	
		// for(var i =0 ;i <= group_array[$(this).val()]; i++){
			// var html = $("#chess-group-template").show().clone();
			// console.log($(html).find(":contains('A組棋力下限')"));
			// $(html).find(":contains('A組棋力下限')").text($(this).val()+'組棋力下限')
			// $("#chess-group").html(html);
		// }
		// console.log($(this).val());
	// });
	$('.multi-select').multiselect({
		enableFiltering: true,
        //filterBehavior: 'value',
		buttonWidth: '100%',
		nonSelectedText: '請選擇',
	});
</script>
@stop
@stop