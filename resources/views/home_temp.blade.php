@extends('layouts.dashboard')
@section('page_heading','official')
@section('section')
<style>
.active{
	overflow: hidden;
	white-space: nowrap;
}
</style>
<div class="row">
    <div class="col-sm-12">
	<br>
	<iframe width="640" height="360" src="https://www.youtube.com/embed/RkgHSqdMCCI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	@if(0)@endif
	<iframe  src="https://www.youtube.com/live_chat?v=RkgHSqdMCCI&embed_domain=cchess.nctu.me" height="360">

	</div>
</div>
	<div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    棋手排行榜
					<a href="{{url('/player/view')}}" class="btn btn-success btn-xs" style="float:right">查看更多</a>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
						<thead>
							<tr>
								<th>排名</th>
								<th>棋手姓名</th>
								<th>等級分</th>
								<th>局數</th>
								<th>勝局</th>
								<th>敗局</th>
								<th>和局</th>
								<th>紅方</th>
								<th>勝</th>
								<th>敗</th>
								<th>和</th>
								<th>黑方</th>
								<th>勝</th>
								<th>敗</th>
								<th>和</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td><a href="{{url('/temp31')}}">陳國興</a></td>
								<td>1740</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
								<td>0</td>
							</tr>
						</tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
	@section('script')
	<script>	
	$('.carousel').carousel({
		interval: false
	});
	$('.carousel .item').each(function(){
	  var next = $(this).next();
	  if (!next.length) {
		next = $(this).siblings(':first');
	  }
	  next.children(':first-child').clone().appendTo($(this));
	  
	  if (next.next().length>0) {
		next.next().children(':first-child').clone().appendTo($(this));
	  } else {
		$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
	  }
	});
	</script>
	@stop
@stop