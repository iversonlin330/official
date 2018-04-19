@extends('layouts.modal')
@section('modal-title')
	{{'請問是否要投'.$player->name}}
@stop
@section('modal-body')
<div class="row">
	<div class="col-md-12">
		@if(!$vote)
		<form class="form-horizontal" action="{{Request::url()}}" method='post'>
		{{'請問是否要投'.$player->name}}<br>
		每人每日限定投一票，送出後不可修改
		<div style="float:right ">
			<button type="submit" class="btn btn-primary">送出</button>
			<button class="btn btn-success" data-dismiss="modal" aria-label="Close">關閉</button>
			@if(0)
			<button class="btn btn-primary" data-dismiss="modal" aria-label="Close">Save</button>
			@endif
		</div>
		</form>
		@else
			您已經投過票了
			<button class="btn btn-success" data-dismiss="modal" aria-label="Close">關閉</button>
		@endif
	</div>
</div>
<script>
</script>
@stop
