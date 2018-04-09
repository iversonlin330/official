@extends('layouts.dashboard')
@section('page_heading', $playbook->name)
@section('section')
<style>
.table>tbody>tr>td{
    vertical-align: baseline;
}
</style>
<div class="col-sm-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
            {{ $playbook->name }}
        </div>
        <div class="panel-body">
		{!! $playbook->playbook_iframe !!}
		</div>
    </div>
</div>
@section('script')
<script>

</script>
@stop
@stop