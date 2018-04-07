<table class="table table-bordered">
	<thead>
		<tr>
			<th>排名</th>
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
			<td><a href="{{url('/player/show/'.$player->player_id)}}">{{$player->name}} ({{$player->team}})</a></td>
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