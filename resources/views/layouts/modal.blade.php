<style>
@if(0)
.modal-dialog{
	width:800px;
}
@endif
.box label {
    font-weight: bold;
    float: left;
    text-align: right;
    margin-left: -180px;
    width: 175px;
}
.box p {
    margin: 0;
    padding: 3px 0 3px 0;
    padding-left: 180px;
    min-height: 1.8em;
    clear: left;
}
.box input{
	max-width: 95%;
}
.box textarea{
	max-width: 95%;
}
.required{
	color:red;
}
.box select{
    max-width: 95%;
}
</style>
<div class="modal-content">
  <div class="panel panel-primary" style="border: 5px;">
		<div class="panel-heading">
			<h3 class="panel-title"><i class="glyphicon glyphicon-ok"></i>@yield('modal-title')</h3>
		</div>
		<div class="panel-body">
			@yield('modal-body')
		</div>
	</div>
</div>
  
  
  
  