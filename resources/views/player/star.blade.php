@extends('layouts.dashboard')
@section('page_heading','選手人氣排行')
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
                選手人氣排行
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
							<th>人氣</th>
                            <th>EloRating</th>
                            <th>段位</th>
                            <th>姓名</th>
							<th>投票</th>
							@if(0)
                            <th>Good</th>
                            <th>Bad</th>
                            <th>Vote Good</th>
                            <th>Vote Bad</th>
                            <th>Upload</th>
							@endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($players as $player)
                        <tr>
							<td>{{$player->vote}}</td>
                            <td>{{$player->elo}}</td>
                            <td>{{$player->D}}</td>
							<td>{{$player->name}}</td>
							@if(Auth::check())
								<td><a class='btn btn-xd btn-primary' href="{{url('/player/vote/'.$player->id)}}" data-toggle="modal" data-target="#ajax-modal">投票</a></td>
							@else
								<td>請先登入</td>
							@endif
							@if(0)
                            <td><img style='max-width: 20%;' src="http://3.bp.blogspot.com/-IbEOTNtCMyU/TfCAdHaAxEI/AAAAAAAAA8U/EATib38SSAM/s320/joe-mcelderry.jpg" alt=""></td>   
							
                            <td>1285</td>
                            <td>203</td>
                            <td><a class="btn btn-success" href="">Good</a></td>
                            <td><a class="btn btn-danger" href="">Bad</a></td>
                            <td><a class="btn btn-primary" href="">上傳圖片</a></td>
							@endif
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