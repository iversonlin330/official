@extends('layouts.dashboard')
@section('page_heading','Forum')
@section('section')
<div class="col-md-12">
    <div>
        <a class='btn btn-primary'>New</a>
    </div><br>
    <div class="panel panel-primary">
        <div class="panel-heading">
            First
        </div>
        <div class="panel-body">
            <blockquote>
            <p>Nice</p>
            <footer>David  <cite title="Source Title">於 31週前</cite></footer>
            </blockquote>

            <blockquote>
            <p>Nice 2</p>
            <footer>David  <cite title="Source Title">於 35週前</cite></footer>
            </blockquote>
        </div>
    </div>
</div>
@stop