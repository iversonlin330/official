@extends('layouts.modal')
@section('modal-title')
	{{'請問是要報名'.$group->game->name}}
@stop
@section('modal-body')
<div class="row">
	<div class="col-md-12">
		<form class="form-horizontal" action="{{Request::url()}}" method='post'>
		{{'請問是否要報名'.$group->game->name.'的'.$group->group_name.'組'}}<br>
		送出後不可修改
		<div style="float:right ">
			<button type="submit" class="btn btn-primary">送出</button>
			<button class="btn btn-success" data-dismiss="modal" aria-label="Close">關閉</button>
		</div>
		</form>
	</div>
</div>
<script>
</script>
@stop
