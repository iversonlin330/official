@extends('layouts.dashboard')
@section('page_heading','棋夢元')
@section('section')
<style>
.active{
	overflow: hidden;
	white-space: nowrap;
}
.container {
    position: relative;
    width: 100%;
    height: 0;
    padding-bottom: 56.25%;
}
.video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>
@if($video)
<div class="row">
    <div class="col-sm-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				{{$video->title}}
				<a href="{{url('/video/view')}}" class="btn btn-success btn-xs" style="float:right">更多影片</a>
			</div>
			<div class="panel-body">
				<div class="container">
					<iframe src="https://www.youtube.com/embed/{{$video->youtube_id}}?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="video"></iframe>
				</div>
				@if($status == 'live')
					<iframe id="chat" src="https://www.youtube.com/live_chat?v={{$video->youtube_id}}&embed_domain=cchess.nctu.me" height="360"></iframe>
				@endif
			</div>
		</div>
	</div>
</div>
@endif
	<div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    棋手排行榜
					<a href="{{url('/player/view')}}" class="btn btn-success btn-xs" style="float:right">查看更多</a>
                </div>
                <div class="panel-body">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#1" data-toggle="tab">新店</a>
					</li>
					<li><a href="#2" data-toggle="tab">汐止</a>
					</li>
					<li><a href="#3" data-toggle="tab">全棋聯賽</a>
					</li>
					<li><a href="#4" data-toggle="tab">學生聯賽</a>
					</li>
				</ul>
				<div class="tab-content">
						<div class="tab-pane fade in active" id="1">
							@include('home_table',['players' => $players])
						</div>
						<div class="tab-pane fade" id="2">
							@include('home_table',['players' => $player_sijhih])
						</div>
						<div class="tab-pane fade" id="3">
							@include('home_table',['players' => $player_all])
						</div>
						<div class="tab-pane fade" id="4">
							@include('home_table',['players' => $player_student])
						</div>
				</div>
				@if(0)
                    <table class="table table-bordered">
						<thead>
							<tr>
								<th>目前排名</th>
								<th>棋手姓名</th>
								<th>Glicko</th>
								<th>局數</th>
								<th>勝局</th>
								<th>敗局</th>
								<th>和局</th>
								<th>總勝率</th>
								<th>先手勝率</th>
								<th>後手勝率</th>
								<th>Glicko變化</th>
								<th>積分</th>
								<th>最後對弈時間</th>
							</tr>
						</thead>
						<tbody>
						<?php $i=0; ?>
						@foreach($players as $player)
							<?php $i++; ?>
							<tr>
								<td>{{ $i }}</td>
								<td><a href="{{url('/temp31')}}">{{$player->name}} ({{$player->team}})</a></td>
								<td>{{$player->glicko}}</td>
								<?php 
									$total= $player->offensive_win + $player->defensive_win + $player->offensive_lose + $player->defensive_lose + $player->offensive_draw + $player->defensive_draw;
									$offensive = $player->offensive_win + $player->offensive_lose;
									$defensive = $player->defensive_win + $player->defensive_lose;
								?>
								<td>{{$total}}</td>
								<td>{{$player->offensive_win + $player->defensive_win}}</td>
								<td>{{$player->offensive_lose + $player->defensive_lose}}</td>
								<td>{{$player->offensive_draw + $player->defensive_draw}}</td>
								<td>
								@if($total != 0)
									{{number_format((($player->offensive_win + $player->defensive_win)*2+($player->offensive_draw + $player->defensive_draw)*1)/($total*2)*100,2)}}%
								@else
									0%
								@endif
								</td>
								<td>
								@if($offensive != 0)								
									{{number_format(($player->offensive_win*2+$player->offensive_draw*1)/($offensive*2)*100,2)}}%
								@else
									0%
								@endif
								</td>
								<td>
								@if($defensive != 0)								
									{{number_format(($player->defensive_win*2+$player->defensive_draw*1)/($defensive*2)*100,2)}}%
								@else
									0%
								@endif
								</td>
								@if(strpos($player->glicko_change, '+')!== false)
									<td style="color:green;">▲{{substr($player->glicko_change, 1)}}</td>
								@elseif(strpos($player->glicko_change, '-')!== false)
									<td style="color:red;">▼{{substr($player->glicko_change, 1)}}</td>
								@else
									<td>{{$player->glicko_change}}</td>
								@endif
								<td>{{ $player->gp_score + $player->m_score }}</td>
								<td>{{$player->last_race_date}}</td>
							</tr>
						@endforeach
						</tbody>
					</table>
					@endif
                </div>
            </div>
        </div>
    </div>
	@section('script')
	<script>	
		$('table').dataTable({
			searching: false,
			paging: false,
			bInfo: false
		});
	</script>
	@stop
@stop
