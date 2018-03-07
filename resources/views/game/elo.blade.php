@extends('layouts.dashboard')
@section('page_heading','Elo計算')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
	@if(0)
    <div>
        <a class='btn btn-primary'>Upload</a>
    </div><br>
	@endif
    <div class="panel panel-primary">
        <div class="panel-heading">
            Elo計算
        </div>
        <div class="panel-body">
		@if(0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Pic</th>
                        <th>1st</th>
                        <th>2nd</th>
                        <th>3rd</th>
                        <th>4th</th>
                        <th>Sponsor</th>
                        <th>Best bonus</th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2017-08-29</td>
                    <td><a href="">First game</a></td>
                    <td><img style='max-width: 20%;' src="http://3.bp.blogspot.com/-IbEOTNtCMyU/TfCAdHaAxEI/AAAAAAAAA8U/EATib38SSAM/s320/joe-mcelderry.jpg" alt=""></td>
                    <td><a href="">David</a></td>
                    <td><a href="">David</a></td>
                    <td><a href="">David</a></td>
                    <td><a href="">David</a></td>
                    <td><a href="">HT co.</a></td>
                    <td>30,000</td>
                </tr>
                </tbody>
            </table>
			@endif
			 <form class="form-horizontal" action="{{Request::url()}}" method='post' enctype="multipart/form-data">
			<div class="form-group">
				<label class="control-label col-sm-2">Elo A</label>
				<div class="col-sm-10">
					<input id='elo_a' name="name" type="text" class="form-control" placeholder="Elo a">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">W A</label>
				<div class="col-sm-10">
					<input id='w_a' name="name" type="text" class="form-control" placeholder="W a">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">K A</label>
				<div class="col-sm-10">
					<input id='k_a' name="name" type="text" class="form-control" placeholder="K a">
				</div>
			</div>
			</from>
        </div>
    </div>
</div>
@section('script')
<script>
    $('table').DataTable();
</script>
@stop
@stop