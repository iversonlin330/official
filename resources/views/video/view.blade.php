@extends('layouts.dashboard')
@section('page_heading','影片專區')
@section('section')
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            影片專區
        </div>
        <div class="panel-body">
		<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>發佈日期</th>
					<th>預覽圖</th>
					<th>影片標題</th>
					<th>觀看數</th>
					<th>喜歡數</th>
					<th>留言數</th>
					<th>觀看</th>
				</tr>
			</thead>
			<tbody>
			@foreach($videos as $video)
			<tr>
				<td>{{ $video->play_date }}</td>
				<td><img src="{{ $video->pic_url }}" style="max-width:150px"></td>
				<td>{{ $video->title }}</td>
				<td>{{ $video->viewCount }}</td>
				<td>{{ $video->likeCount }}</td>
				<td>{{ $video->commentCount }}</td>
				<td><a class="btn btn-success" href="{{url('/video/show/'.$video->id)}}">觀看</a></td>
			</tr>
			@endforeach
			</tbody>
		</table>
		</div>
        </div>
    </div>
</div>
@section('script')
<script>
$('table').DataTable({
		"order": [[ 0, "desc" ]]
	});
</script>
@stop
@stop