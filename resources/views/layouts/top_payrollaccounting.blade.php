 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Document Tracking System</title>

    {{--trying to fix error "Uncaught Error: Bootstrap's JavaScript requires jQuery": --}}
    {{--jQuery--}}
    {{--<script src="{{asset('js/libs.js')}}"></script>--}}

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <link href="{{asset('css/libs.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('styles')

</head>

<body id="admin-page">

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-primary navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""><span class="logo-lg">Document <b>Tracking </b>System</span></a>
        </div>
        <!-- /.navbar-header -->



        <ul class="nav navbar-top-links navbar-right">


            <!-- /.dropdown -->
            <li class="dropdown">
                {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
                    {{--<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu dropdown-user">--}}
                    {{--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>--}}
                    {{--</li>--}}
                    {{--<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>--}}
                    {{--</li>--}}
                    {{--<li class="divider"></li>--}}
                    {{--<li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fa fa-user fa-fw"></i> Welcome ! <b>{{  Auth::user()->last_name}}</b> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->


        </ul>






        {{--<ul class="nav navbar-nav navbar-right">--}}
        {{--@if(auth()->guest())--}}
        {{--@if(!Request::is('auth/login'))--}}
        {{--<li><a href="{{ url('/auth/login') }}">Login</a></li>--}}
        {{--@endif--}}
        {{--@if(!Request::is('auth/register'))--}}
        {{--<li><a href="{{ url('/auth/register') }}">Register</a></li>--}}
        {{--@endif--}}
        {{--@else--}}
        {{--<li class="dropdown">--}}
        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->first_name }} <span class="caret"></span></a>--}}
        {{--<ul class="dropdown-menu" role="menu">--}}
        {{--<li><a href="{{ url('/auth/logout') }}">Logout</a></li>--}}

        {{--<li><a href="{{ url('/admin/profile') }}/{{auth()->user()->id}}">Profile</a></li>--}}
        {{--</ul>--}}
        {{--</li>--}}
        {{--@endif--}}
        {{--</ul>--}}





        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
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
                    <li>
                        <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> <b>Dashboard</b></a>
                    </li>

                    
                    <li>
                        <a href="{{route('acc_vouchers')}}"><i class="fa fa-wrench fa-fw"></i><b> Vouchers</b><span class="fa arrow"></span></a>
                        
                      
                    </li>

                    <li>
                        <a href="{{route('acc_prs')}}"><i class="fa fa-wrench fa-fw"></i><b>Purchase Request</b><span class="fa arrow"></span></a>
                        
                    </li>

                     <li>
                        <a href="{{route('budget')}}"><i class="fa fa-wrench fa-fw"></i><b>Requisition</b><span class="fa arrow"></span></a>
                        
                        <!-- /.nav-second-level -->
                    </li>


                    <li>
                        <a href="{{ route('treasurer') }}"><i class="fa fa-wrench fa-fw"></i><b>Voucher No OBRs</b><span class="fa arrow"></span></a>
                        
                        <!-- /.nav-second-level -->
                    </li>


                    <li>
                        <a href="{{ route('acc_payrolls') }}"><i class="fa fa-wrench fa-fw"></i><b>Payrolls</b><span class="fa arrow"></span></a>
                        
                    </li>

                    







                    
                   


            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>





    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="/profile"><i class="fa fa-dashboard fa-fw"></i>Profile</a>
                </li>




                <li>
                    <a href="#"><i class="fa fa-wrench fa-fw"></i> Posts<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="">All Posts</a>
                        </li>

                        <li>
                            <a href="">Create Post</a>
                        </li>

                    </ul>
                    <!-- /.nav-second-level -->
                </li>





            </ul>

        </div>

    </div>

</div>






<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>

                @yield('content')
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('js/libs.js')}}"></script>



@yield('scripts')





</body>

</html>
