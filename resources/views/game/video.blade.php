@extends('layouts.dashboard')
@section('page_heading','Game')
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
    <div>
        <a class='btn btn-primary'>Upload</a>
    </div><br>
    <div class="panel panel-primary">
        <div class="panel-heading">
            Game info
        </div>
        <div class="panel-body">
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
        </div>
    </div>
</div>
@section('script')
<script>
    $('table').DataTable();
</script>
@stop
@stop