<!DOCTYPE html>
<html lang="en">

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

    <style>
        body,
        html {
            height: 100%;
        }

        /* remove outer padding */
        .main .row {
            padding: 0px;
            margin: 0px;
        }

        /*Remove rounded coners*/
        nav.sidebar.navbar {
            border-radius: 0px;
        }

        nav.sidebar,
        .main {
            -webkit-transition: margin 200ms ease-out;
            -moz-transition: margin 200ms ease-out;
            -o-transition: margin 200ms ease-out;
            transition: margin 200ms ease-out;
        }

        /* Add gap to nav and right windows.*/
        .main {
            padding: 10px 10px 0 10px;
        }

        /* .....NavBar: Icon only with coloring/layout.....*/
        /*small/medium side display*/
        @media (min-width: 768px) {

            /*Allow main to be next to Nav*/
            .main {
                position: absolute;
                width: calc(100% - 40px);
                /*keeps 100% minus nav size*/
                margin-left: 40px;
                float: right;
            }

            /*lets nav bar to be showed on mouseover*/
            nav.sidebar:hover+.main {
                margin-left: 200px;
            }

            /*Center Brand*/
            nav.sidebar.navbar.sidebar>.container .navbar-brand,
            .navbar>.container-fluid .navbar-brand {
                margin-left: 0px;
            }


            /*Center Brand*/
            nav.sidebar .navbar-brand,
            nav.sidebar .navbar-header {
                text-align: center;
                width: 100%;
                margin-left: 0px;
            }

            /*Center Icons*/
            nav.sidebar a {
                padding-right: 13px;
            }

            /*adds border top to first nav box */
            nav.sidebar .navbar-nav>li:first-child {
                border-top: 1px #e5e5e5 solid;
            }

            /*adds border to bottom nav boxes*/
            nav.sidebar .navbar-nav>li {
                border-bottom: 1px #e5e5e5 solid;
            }

            /* Colors/style dropdown box*/
            nav.sidebar .navbar-nav .open .dropdown-menu {
                position: static;
                float: none;
                width: auto;
                margin-top: 0;
                background-color: transparent;
                border: 0;
                -webkit-box-shadow: none;
                box-shadow: none;
            }

            /*allows nav box to use 100% width*/
            nav.sidebar .navbar-collapse,
            nav.sidebar .container-fluid {
                padding: 0 0px 0 0px;
            }

            .container-bottom {
                position: absolute;
                padding: 0px 0px 0 0px;
                bottom: 0px;
            }

            /*colors dropdown box text */
            .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
                color: #777;
            }

            /*gives sidebar width/height*/
            nav.sidebar {
                width: 200px;
                height: 100%;
                margin-left: -160px;
                float: left;
                z-index: 8000;
                margin-bottom: 0px;
            }

            /*give sidebar 100% width;*/
            nav.sidebar li {
                width: 100%;
            }

            /* Move nav to full on mouse over*/
            nav.sidebar:hover {
                margin-left: 0px;
            }

            /*for hiden things when navbar hidden*/
            .forAnimate {
                opacity: 0;
                background-color: #555;
            }
        }

        /* .....NavBar: Fully showing nav bar..... */

        @media (min-width: 1330px) {

            /*Allow main to be next to Nav*/
            .main {
                width: calc(100% - 200px);
                /*keeps 100% minus nav size*/
                margin-left: 200px;
            }

            /*Show all nav*/
            nav.sidebar {
                margin-left: 0px;
                float: left;
            }

            /*Show hidden items on nav*/
            nav.sidebar .forAnimate {
                opacity: 1;
            }
        }



        nav:hover .forAnimate {
            opacity: 1;
        }

        section {
            padding-left: 15px;
        }

        .bottom {
            bottom: 0px;
        }

        .intro {
  font-size: 150%;
  color: red;
}
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse sidebar" role="navigation">
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
                    <li id="nav_li_dashboard" class="active"><a href="#">DashBoard<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-dashboard"></span></a></li>
                    <li id="nav_li_profile"><a href="#">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                    <li id="nav_li_blog"><a href="#">Blog<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a></li>
                    <li id="nav_li_user"><a href="#">User<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-book"></span></a></li>
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
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                    <li id="nav_li_Home"><a href="">Back To Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main">
        @yield('content')
    </div>

    <script>
        $(document).ready(function() {
            $("#nav_li_blog").click(function() {
                $(".nav_ul_top li").removeClass("active");
                $("#nav_li_blog").addClass("active");
                $(".main").load("{{route('blog.index')}}");
            });
            $("#nav_li_user").click(function() {
                $(".nav_ul_top li").removeClass("active");
                $("#nav_li_user").addClass("active");
                $(".main").load("{{route('user')}}");
            });

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
    </script>
</body>

</html>