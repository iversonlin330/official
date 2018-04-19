@extends('layouts.dashboard')
@section('page_heading','選手排行榜')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
    <!-- /.row -->
    <div class="col-sm-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                選手排行榜
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>等級分</th>
                            <th>勝率</th>
                            <th>段位</th>
                            <th>單位</th>
                            <th>大頭照</th>
                            <th>姓名</th>
                            <th>加油支持</th>
                            <th>加油支持</th>
                            <th>上傳大頭貼</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($players as $player)
                        <tr>
                            <td>{{$player->elo}}</td>
                            <td></td>
                            <td>{{$player->D}}</td>
                            <td></td>
                            <td><img style='width: 100%;' src="{{$player->pic_url}}" alt=""></td>
                            <td>{{$player->name}}</td>
                            <td>{{$player->player_vote->count()}}</td>
                            <td>
							@if(Auth::check())
								<a class="btn btn-success" href="{{url('/player/vote/'.$player->player_id)}}"data-toggle="modal" data-target="#ajax-modal">加油支持</a>
								@else
								請先登入
							@endif
							</td>
                            <td><a class="btn btn-primary" href="">上傳圖片</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.row -->
@section('script')
<script>
    $('table').DataTable();
</script>
@stop
@stop