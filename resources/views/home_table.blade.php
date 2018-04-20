<table class="table table-bordered">
	<thead>
		<tr>
			<th>排名</th>
			<th>單位</th>
			<th>棋手姓名</th>
			<th>Glicko</th>
			<th>Elo</th>
			<th>局</th>
			<th>勝</th>
			<th>敗</th>
			<th>和</th>
			<th>總勝率</th>
			<th>先手勝率</th>
			<th>後手勝率</th>
			<th>得分</th>
			@if(0)
			<th>Glicko變化</th>
			<th>積分</th>
			<th>最後對弈時間</th>
			@endif
			<th>人氣</th>
			<th>加油支持</th>
		</tr>
	</thead>
	<tbody>
	<?php $i=0; ?>
	@foreach($players as $player)
		<?php $i++; ?>
		<tr>
			<td>{{ $i }}</td>
			<td>{{$player->team}}</td>
			<td>
				<a href="{{url('/player/show/'.$player->player_id)}}">{{($player->player)? $player->player->name : ''}}</a>
			</td>
			<td>{{($player->player)? $player->player->glicko : ''}} (
			@if($player->player)
				@if(strpos($player->player->glicko_change, '+')!== false)
					<span style="color:green;">▲{{substr($player->player->glicko_change, 1)}}</span>
				@elseif(strpos($player->player->glicko_change, '-')!== false)
					<span style="color:red;">▼{{substr($player->player->glicko_change, 1)}}</span>
				@else
					<span>--</span>
				@endif
			@endif
			)</td>
			<td>{{($player->player)? $player->player->elo : ''}} (
			@if($player->player)
				@if(strpos($player->player->elo_change, '+')!== false)
					<span style="color:green;">▲{{substr($player->player->elo_change, 1)}}</span>
				@elseif(strpos($player->player->elo_change, '-')!== false)
					<span style="color:red;">▼{{substr($player->player->elo_change, 1)}}</span>
				@else
					<span>--</span>
				@endif
			@endif
			)</a></td>
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
			@if(0)
			@if(strpos($player->glicko_change, '+')!== false)
				<td style="color:green;">▲{{substr($player->glicko_change, 1)}}</td>
			@elseif(strpos($player->glicko_change, '-')!== false)
				<td style="color:red;">▼{{substr($player->glicko_change, 1)}}</td>
			@else
				<td>{{$player->glicko_change}}</td>
			@endif
			<td>{{ $player->gp_score + $player->m_score }}</td>
			<td>{{$player->last_race_date}}</td>
			@endif
			<td>{{$player->offensive_win*2+$player->offensive_draw*1+$player->defensive_win*2+$player->defensive_draw*1}}</td>
			<td>{{$player->player_vote->count()}}</td>
			<td>
			@if(Auth::check())
				<a class="btn btn-success btn-xs" href="{{url('/player/vote/'.$player->player_id)}}"data-toggle="modal" data-target="#ajax-modal">加油支持</a>
			@else
				請先登入
			@endif
			</td>
		</tr>
	@endforeach
	</tbody>
</table>