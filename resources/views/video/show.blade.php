@extends('layouts.dashboard')
@section('page_heading',$video->title)
@section('section')
<style>
.active{
	overflow: hidden;
	white-space: nowrap;
}
</style>
@if($video)
<div class="row">
    <div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				{{$video->title}}
			</div>
			<div class="panel-body">
				<iframe width="640" height="360" src="https://www.youtube.com/embed/{{$video->youtube_id}}?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				@if($status == 'live')
					<iframe id="chat" src="https://www.youtube.com/live_chat?v={{$video->youtube_id}}&embed_domain=cchess.nctu.me" height="360"></iframe>
				@endif
			</div>
		</div>
	</div>
</div>
@endif
	@section('script')
	<script>	
	</script>
	@stop
@stop
