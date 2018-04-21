@extends('layouts.dashboard')
@section('page_heading',$highlight->title)
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
		{{$highlight->title}}
        </div>
        <div class="panel-body">
		{!! $highlight->content_html !!}
        </div>
    </div>
</div>
@section('script')
<script>
</script>
@stop
@stop