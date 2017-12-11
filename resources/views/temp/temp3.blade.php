@extends('layouts.dashboard')
@section('page_heading','棋手隊伍')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-md-12">
	<div class="col-md-8">
	@for($i=0;$i<24;$i++)
		<div class="col-md-2">
	<a href='{{url('temp31')}}'>
			<img style='max-width: 100%;' src="http://3.bp.blogspot.com/-IbEOTNtCMyU/TfCAdHaAxEI/AAAAAAAAA8U/EATib38SSAM/s320/joe-mcelderry.jpg" alt="">
	</a>
		</div>
	@endfor
	</div>
	<div class="col-md-4">
		<div class="panel panel-default">

			<!-- /.panel-heading -->
			<div class="panel-body">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li class="active"><a href="#home" data-toggle="tab" aria-expanded="false">比賽資訊</a>
					</li>
					<li ><a href="#profile" data-toggle="tab" aria-expanded="true">品弈人生</a>
					</li>
					<li><a href="#messages" data-toggle="tab">我是粉絲</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane fade" id="home">
						<p>這邊會放比賽資訊</p>
					</div>
					<div class="tab-pane fade active in" id="profile">
						<p>這邊會放象棋文章</p>
					</div>
					<div class="tab-pane fade" id="messages">
						<p>這邊會放用戶最愛的棋手和棋隊的文章</p>
					</div>
					<div class="tab-pane fade" id="settings">
						<h4>Settings Tab</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>
			<!-- /.panel-body -->
		</div>
	</div>
</div>
@section('script')
<script>
    $('table').DataTable();
</script>
@stop
@stop