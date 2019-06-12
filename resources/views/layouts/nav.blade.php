<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: "Lato", sans-serif;
            transition: background-color .5s;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            left: 0;
            background-color: #FFFFFF;
            overflow-x: hidden;
            transition: 0.5s;

        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 15px;
            color: #111;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: initial;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            position: fixed;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
                border-style: solid;
            border-width: 1px
            }
        }
    </style>
</head>

<body>
    <div class="left-nav">
        <div id="main">
            <span style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;</span>
        </div>

        <div id="mySidenav" class="sidenav">
            <span style="font-size:30px;cursor:pointer;" onclick="closeNav()">&#9776;</span>
            <a href="{{route('index')}}">index</a>
            <a href="{{route('blog.index')}}">---</a>


        </div>
    </div>

    <script>
        function openNav() {
            document.getElementById("main").style.visibility = "hidden";
            document.getElementById("mySidenav").style.width = "200px";
            document.getElementById("main").style.marginLeft = "200px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";

        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
            document.getElementById("main").style.visibility = "visible";
        }
    </script>

</body>

</html>