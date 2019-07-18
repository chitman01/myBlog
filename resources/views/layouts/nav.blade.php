<!DOCTYPE html>
<html lang="en">
<meta name="csrf-token" content="{{ csrf_token() }}">

<head>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'MyBlog') }}</title>

    <!------ Include the above in your HEAD tag ---------->

    <link href="{{URL::asset('css/custom.css')}}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-default sidebar" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav nav_ul_top">
                    <li id="nav_li_dashboard"><a href="{{route('dashboard')}}">DashBoard<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-dashboard"></span></a></li>
                    <li id="nav_li_profile"><a href="{{route('profile')}}">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                    <li id="nav_li_blog"><a href="{{route('blog.index')}}">Blog<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a></li>
                    <li id="nav_li_user"><a href="{{route('user')}}">User<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-book"></span></a></li>
                    <li id="nav_li_messages"><a href="#">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
                </ul>
            </div>
        </div>
        <div class="container-bottom">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav nav_ul_bottom">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
                        <ul class="dropdown-menu forAnimate" role="menu">
                            <li class="dropdown-header">Dropdown header</li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                        </ul>
                    </li>
                    <li id="nav_li_Home"><a href="{{action('HomeController@home')}}">Back To Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main">
        @yield('content')
        {{-- @include('admin.dashboard') --}}
    </div>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function htmlbodyHeightUpdate() {
            var height3 = $(window).height()
            var height1 = $('.nav').height() + 50
            height2 = $('.main').height()
            if (height2 > height3) {
                $('html').height(Math.max(height1, height3, height2) + 10);
                $('body').height(Math.max(height1, height3, height2) + 10);
            } else {
                $('html').height(Math.max(height1, height3, height2));
                $('body').height(Math.max(height1, height3, height2));
            }
        }

        $(document).ready(function() {
            htmlbodyHeightUpdate()
            $(window).resize(function() {
                htmlbodyHeightUpdate()
            });
            $(window).scroll(function() {
                height2 = $('.main').height()
                htmlbodyHeightUpdate()
            });
        });

        // Form blog -> delete
        $(document).on('click',".delete_blog",function() {
            var id = this.id;
            console.log(id);
            var confirm_delete = confirm("Press a button!");
            if (confirm_delete == true) {
                console.log("You pressed OK!");
                $.ajax({
                    type: 'get',
                    url: '{{URL::to('blog_destroy')}}',
                    data: {
                        "id": id
                    },
                    success: function(data) {
                        console.log("Delete Success");
                        $("#tr"+id).remove();
                    
                    },
                    error: function(data) {
                        console.log("error ajax");
                    }
                });
            } else {
                console.log("You pressed Cancel!");
            }
        });
    </script>

</body>
</html>