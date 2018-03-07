@extends('layouts.dashboard')
@section('page_heading','賽事花絮')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
    <div>
        <a class='btn btn-primary' href="{{ url('/game/highlight-add') }}">新增</a>
    </div><br>
    <div class="panel panel-primary">
        <div class="panel-heading">
            賽事花絮
        </div>
        <div class="panel-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>建立日期</th>
                        <th>標題</th>
                        <th>文章內容</th>
                        <th>觀看更多</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2017-08-29</td>
                    <td><a href="">XXX大賽</a></td>
                    <td>sdckmsdcl;s,dclscdsdc.....</td>
                    <td><a href="{{ url('/game/highlight-detail') }}" class="btn btn-success">觀看更多</a></td>
                </tr> 
                </tbody>
            </table>
        </div>
    </div>
</div>
@section('script')
<script>
    $('table').DataTable();
</script>
@stop
@stop