@extends('layouts.plane')

@section('body')
<div id="ajax-modal" class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    @include('layouts.modal')
  </div>
</div>
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{ url ('') }}"><img src="{{asset('/icon.jpg')}}" style='max-height:50px;border-radius:50%;' alt='website_pic'></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
            @if(Auth::check())
				@if(is_null(Auth::user()->player_id))
				<li>
					<a href="{{url('/user/verify')}}">請先完善基本資料</a>
				</li>
				@endif
				<img style='max-height: 48px;border-radius:50%;' src="{{Auth::user()->avatar}}" alt="">
				<li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
				@if(is_null(Auth::user()->player_id))
					<button type="button" class="btn btn-danger btn-circle"><i class="fa fa-times"></i></button>
				@else
					@if(Auth::user()->is_verify == 1)
						<button type="button" class="btn btn-warning btn-circle"><i class="fa fa-star"></i></button>
					@else
						<button type="button" class="btn btn-success btn-circle"><i class="fa fa-check"></i></button>
					@endif
				@endif
				&nbsp{{Auth::user()->name}} <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{url('/user/game')}}"><i class="fa fa-user fa-fw"></i> 我的比賽</a>
                    </li>
					@if(0)
					<li><a href="#"><i class="fa fa-user fa-fw"></i> 個人資料</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> 設定</a>
                    </li>
					@endif
                    <li class="divider"></li>
                    <li><a href="{{url('/auth/logout')}}"><i class="fa fa-sign-out fa-fw"></i> 登出</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
				</li>
            @else
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true">
                    <i class="fa fa-user fa-fw"></i>登入 <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{url('/oauth/oauth/google')}}"><i class="fa fa-google fa-fw"></i> Google</a>
                    </li>
                    <li><a href="{{url('/oauth/oauth/facebook')}}"><i class="fa fa-facebook fa-fw"></i> Facebook</a>
                    </li>
                    @if(0)
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    @endif
                </ul>
                <!-- /.dropdown-user -->
            </li>
            @endif
            @if(0)
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                   
                                        <div>
                                      
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                   
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                   
                                        <div>
                                        
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                   
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    
                                        <div>
                                       
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                   
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    
                                        <div>
                                        
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ url ('login') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            @endif
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse collapse">
                    <ul class="nav" id="side-menu">
					<li class="">
						<gcse:search></gcse:search>
					</li>
                    @if(0)
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                    @endif
					@if(0)
                        <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/game/sign') }}"><i class="fa fa-dashboard fa-fw"></i> 比賽報名</a>
                        </li>
						<li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/temp2') }}"><i class="fa fa-dashboard fa-fw"></i> 課程報名</a>
                        </li>
						<li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/temp3') }}"><i class="fa fa-dashboard fa-fw"></i> 棋手隊伍</a>
                        </li>
						<li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/game/view') }}"><i class="fa fa-dashboard fa-fw"></i> 領先排行</a>
                        </li>
						<li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/temp5') }}"><i class="fa fa-dashboard fa-fw"></i> 棋賽速遞</a>
                        </li>
						<li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/game/history') }}"><i class="fa fa-dashboard fa-fw"></i> 歷年比賽</a>
                        </li>
						<li {{ (Request::is('forum') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/forum/view') }}"><i class="fa fa-dashboard fa-fw"></i> 討論區</a>
                        </li>
						@if(0)
                        <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/game/view') }}"><i class="fa fa-dashboard fa-fw"></i> 棋賽資訊</a>
                        </li>
						@endif
						<li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/game/history') }}"><i class="fa fa-dashboard fa-fw"></i> 棋賽資訊</a>
                        </li>
						@endif
						<li {{ (Request::is('*charts') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/game/sign-temp') }}"><i class="fa fa-info fa-fw"></i> 比賽資訊</a>
                            <!-- /.nav-second-level -->
                        </li>
						<li {{ (Request::is('*charts') ? 'class="active"' : '') }}>
                            <a href="#"><i class="fa fa-bullhorn fa-fw"></i> 棋賽戰況</a>
                            <!-- /.nav-second-level -->
                        </li>
						<li {{ (Request::is('*charts') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/game/highlight') }}"><i class="fa fa-camera-retro fa-fw"></i> 賽事花絮</a>
                            <!-- /.nav-second-level -->
                        </li>
						<li {{ (Request::is('*charts') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/video/view') }}"><i class="fa fa-video-camera fa-fw"></i> 影片專區</a>
                            <!-- /.nav-second-level -->
                        </li>
						<li {{ (Request::is('*charts') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/game/playbook') }}"><i class="fa fa-book fa-fw"></i> 棋譜中心</a>
                            <!-- /.nav-second-level -->
                        </li>
						<li {{ (Request::is('*charts') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/game/playbook') }}"><i class="fa fa-university fa-fw"></i> 線上教室</a>
                            <!-- /.nav-second-level -->
                        </li>
						@if(0)
						<li {{ (Request::is('forum') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/forum/view') }}"><i class="fa fa-dashboard fa-fw"></i> 討論區</a>
                        </li>
						@endif
                        <li {{ (Request::is('*charts') ? 'class="active"' : '') }}>
                            <a href="{{ url ('/player/view') }}"><i class="fa fa-group fa-fw"></i> 選手排行榜</a>
                            <!-- /.nav-second-level -->
                        </li>
						<li {{ (Request::is('*charts') ? 'class="active"' : '') }}>
                            <a href="#"><i class="fa fa-heart fa-fw"></i> 愛心公益</a>
                            <!-- /.nav-second-level -->
                        </li>
						@if(Auth::check() && 0)
							@if(Auth::user()->role > 0)
							<li {{ (Request::is('*charts') ? 'class="active"' : '') }}>
								<a href="{{ url ('/game/upload') }}"><i class="fa fa-bar-chart-o fa-fw"></i> 上傳簡章</a>
								<!-- /.nav-second-level -->
							</li>
							<li>
								<a href="#"><i class="fa fa-wrench fa-fw"></i> 管理者功能<span class="fa arrow"></span></a>
								<ul class="nav nav-second-level collapse">
									<li>
										<a href="{{ url ('/game/upload') }}">上傳簡章</a>
										<!-- /.nav-second-level -->
									</li>
									<li>
										<a href="{{ url ('/game/manage/ongoing') }}">比賽管理</a>
									</li>
								</ul>
								<!-- /.nav-second-level -->
							</li>
							@endif
						@endif
                        @if(0)
                        <li {{ (Request::is('*tables') ? 'class="active"' : '') }}>
                            <a href="{{ url ('') }}"><i class="fa fa-table fa-fw"></i> </a>
                        </li>
                        <li {{ (Request::is('*forms') ? 'class="active"' : '') }}>
                            <a href="{{ url ('forms') }}"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li >
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*panels') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('panels') }}">Panels and Collapsibles</a>
                                </li>
                                <li {{ (Request::is('*buttons') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('buttons' ) }}">Buttons</a>
                                </li>
                                <li {{ (Request::is('*notifications') ? 'class="active"' : '') }}>
                                    <a href="{{ url('notifications') }}">Alerts</a>
                                </li>
                                <li {{ (Request::is('*typography') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('typography') }}">Typography</a>
                                </li>
                                <li {{ (Request::is('*icons') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('icons') }}"> Icons</a>
                                </li>
                                <li {{ (Request::is('*grid') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('grid') }}">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('*blank') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('blank') }}">Blank Page</a>
                                </li>
                                <li>
                                    <a href="{{ url ('login') }}">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li {{ (Request::is('*documentation') ? 'class="active"' : '') }}>
                            <a href="{{ url ('documentation') }}"><i class="fa fa-file-word-o fa-fw"></i> Documentation</a>
                        </li>
                        @endif
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
		@if(!Request::is('/'))@endif
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">@yield('page_heading')</h1>
			</div>
			<!-- /.col-lg-12 -->
	    </div>
		
      <div class="row">  
        @yield('section')

            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop
