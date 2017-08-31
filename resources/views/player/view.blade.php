@extends('layouts.dashboard')
@section('page_heading','Player')
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
                Player info
            </div>
            <div class="panel-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>EloRating</th>
                            <th>Win Rate</th>
                            <th>D</th>
                            <th>Team</th>
                            <th>Pic</th>
                            <th>Name</th>
                            <th>Good</th>
                            <th>Bad</th>
                            <th>Vote Good</th>
                            <th>Vote Bad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>3000</td>
                            <td>99%</td>
                            <td>9</td>
                            <td>HT</td>
                            <td><img style='max-width: 20%;' src="http://3.bp.blogspot.com/-IbEOTNtCMyU/TfCAdHaAxEI/AAAAAAAAA8U/EATib38SSAM/s320/joe-mcelderry.jpg" alt=""></td>
                            <td>David Lin</td>
                            <td>1285</td>
                            <td>203</td>
                            <td><a class="btn btn-success" href="">Good</a></td>
                            <td><a class="btn btn-danger" href="">Bad</a></td>
                        </tr>
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