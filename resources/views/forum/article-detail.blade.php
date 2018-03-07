@extends('layouts.dashboard')
@section('page_heading','XXX棋手如何')
@section('section')
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            文章內容
        </div>
        <div class="panel-body">
		我覺得XXX下的很好
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            討論區
        </div>
        <div class="panel-body">
		@if(0)
            <blockquote>
            <p>Nice</p>
            <footer>David  <cite title="Source Title">於 31週前</cite></footer>
            </blockquote>

            <blockquote>
            <p>Nice 2</p>
            <footer>David  <cite title="Source Title">於 35週前</cite></footer>
            </blockquote>
		@endif
			<div class="fb-comments" data-href="{{Request::url()}}" data-width="100%" data-numposts="5"></div>
        </div>
    </div>
</div>
@section('script')
<script>
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.11&appId=1946376638913233';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@stop
@stop