@extends('layouts.dashboard')
@section('page_heading','official')
@section('section')
<style>
.active{
	overflow: hidden;
	white-space: nowrap;
}
</style>
<div class="row">
    <div class="col-sm-12">
		<div id="myCarousel" class="carousel slide" style='margin-top:20px;' data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
			<div class="item active">
			<div style='display:inline-block;max-height:200px'>
			  <img style='max-height:200px;width:auto;' src="https://thumb7.shutterstock.com/display_pic_with_logo/3842075/519586294/stock-photo-close-up-chinese-checkers-games-planning-and-thinking-concept-519586294.jpg" alt="Los Angeles">
			</div>
			</div>
			<div class="item">
				<div style='display:inline-block;max-height:200px'>
				  <img style='max-height:200px;width:auto;' src="https://thumb9.shutterstock.com/display_pic_with_logo/363001/131338715/stock-photo-chinese-chess-131338715.jpg" alt="Chicago">
				</div>
			</div>
			<div class="item">
				<div style='display:inline-block;max-height:200px'>
				  <img style='max-height:200px;width:auto;' src="https://thumb7.shutterstock.com/display_pic_with_logo/570949/570949,1330797438,7/stock-photo-chinese-chess-general-and-prime-minister-96624799.jpg" alt="New York">
				</div>
			</div>
		  </div>

		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</div>
	<div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    棋賽資訊
					<a href="{{url('/temp1')}}" class="btn btn-success btn-xs" style="float:right">查看更多</a>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
						<thead>
							<tr>
								<th>比賽名稱</th>
								<th>比賽組別</th>
								<th>總獎金</th>
								<th>比賽日期</th>
								<th>主辦單位</th>
								<th>報名</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>觀音盃</td>
								<td>高段組</td>
								<td>300,000</td>
								<td>2018-07-31</td>
								<td>棋協</td>
								<td>資格不符</td>
							</tr>
							<tr>
								<td>觀音盃</td>
								<td>段位甲組</td>
								<td>300,000</td>
								<td>2018-07-31</td>
								<td>棋協</td>
								<td><a href=''>點選報名</a></td>
							</tr>
							<tr>
								<td>觀音盃</td>
								<td>段位乙組</td>
								<td>300,000</td>
								<td>2018-07-31</td>
								<td>棋協</td>
								<td>資格不符</td>
							</tr>
						</tbody>
					</table>
                </div>
            </div>
        </div>
		<div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    棋手隊伍
					<a href="{{url('/temp3')}}" class="btn btn-success btn-xs" style="float:right">查看更多</a>
                </div>
                <div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						@for($i=0;$i<24;$i++)
							<div class="col-md-3">
								<a href="{{url('/temp31')}}">
									<img style='max-width: 100%;' src="http://3.bp.blogspot.com/-IbEOTNtCMyU/TfCAdHaAxEI/AAAAAAAAA8U/EATib38SSAM/s320/joe-mcelderry.jpg" alt="">
								</a>
							</div>
						@endfor
					</div>
				</div>
                </div>
            </div>
        </div>
    </div>
    @if(0)
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-comments fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">26</div>
                            <div>New Comments!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">12</div>
                            <div>New Tasks!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">124</div>
                            <div>New Orders!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">13</div>
                            <div>Support Tickets!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    @endif
	@if(0)
    <div class="row">
         <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    New Activity
                </div>
                <div class="panel-body">
                    <img style='max-width: 100%;' src="http://3.bp.blogspot.com/-IbEOTNtCMyU/TfCAdHaAxEI/AAAAAAAAA8U/EATib38SSAM/s320/joe-mcelderry.jpg" alt="">
                    newnenwenwenwenwenwnewnenwewne
                </div>
            </div>
         </div>
    </div>
    
    <div class="row">
    @for($i=0;$i<6;$i++)
         <div class="col-md-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    New Activity
                </div>
                <div class="panel-body">
                    <img style='max-width: 100%;' src="http://3.bp.blogspot.com/-IbEOTNtCMyU/TfCAdHaAxEI/AAAAAAAAA8U/EATib38SSAM/s320/joe-mcelderry.jpg" alt="">
                </div>
            </div>
         </div>
    @endfor
    </div>
    
    <div class="row">
    @for($i=0;$i<5;$i++)
        <div class="col-lg-2 col-md-2 
        @if($i==0)col-md-offset-1
        @endif">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                        <img style='max-width: 100%;' src="http://3.bp.blogspot.com/-IbEOTNtCMyU/TfCAdHaAxEI/AAAAAAAAA8U/EATib38SSAM/s320/joe-mcelderry.jpg" alt="">
                        </div>
                        <div class="col-md-12 text-left">
                            <div class="h2">Win Rate:99%</div>
                            <div class="h2">Elo:3000</div>
                            <div class="h2">D:9</div>
                            <div class="h2">TeamID:HT</div>
                            <div class="h2">Name:xxx</div>
                        </div>
                    </div>
                </div>
                @if(0)
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
                @endif
            </div>
        </div>
        @endfor
        @if(0)
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">80%</div>
                            <div>New Tasks!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">56%</div>
                            <div>New Orders!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">13%</div>
                            <div>Support Tickets!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        @endif
    </div>
	@endif
	@section('script')
	<script>	
	$('.carousel').carousel({
		interval: false
	});
	$('.carousel .item').each(function(){
	  var next = $(this).next();
	  if (!next.length) {
		next = $(this).siblings(':first');
	  }
	  next.children(':first-child').clone().appendTo($(this));
	  
	  if (next.next().length>0) {
		next.next().children(':first-child').clone().appendTo($(this));
	  } else {
		$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
	  }
	});
	</script>
	@stop
@stop