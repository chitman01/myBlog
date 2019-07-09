@extends('layouts.nav')
@section('content')
<style>
    .blog {
        padding: 10px 0px 10px 0px;
    }

    .full_sc {
        width: 100%;
        background-color: white;
        padding-bottom: 10px;
    }

    .main-box .center {
        display: flex;
        justify-content: center;
        align-items: center;
        height:100px;
    }

    .main-box {
        padding: 5px;
        background-color: #EAEDED;
        margin: 5px;
    }

    .sub-box {
        padding: 5px;
    }
    /*
    div{
        border-style: double;
    }
    */
    div.img-resize .person {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        float:left
    }
    div.img-resize .view {
        width: 60px;
        height: 60px;
        border-radius: 8px;
        float:left
    }

    .scrollbar{
        background-color: #F4F6F6;
        height: 250px;
        overflow: auto;
    }
    ::-webkit-scrollbar {
        width: 5px;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #888; 
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #555; 
    }
    
</style>

<div class="container full_sc">
    <div class="col-sm">
        <h1>Dashboard</h1>
        <div class="row blog">
            <div class="col-sm-4">
                <div class="row main-box">
                    <div class="col-sm-8" style="float:left">
                        <h1>Users</h1>
                        Total user on this site:
                    </div>
                    <div class="col-sm-4 center">
                        <font size="6">11</font>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="row main-box">
                    <div class="col-sm-8" style="float:left">
                        <h1>Something</h1>
                        Show something
                    </div>
                    <div class="col-sm-4 center">
                        <font size="6">11</font>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="row main-box">
                    <div class="col-sm-8" style="float:left">
                        <h1>Total Blog</h1>
                        Total blog on this site:
                    </div>
                    <div class="col-sm-4 center">
                        <font size="6">11</font>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div><br>
        <!-- Pagination for user,blog https://www.webslesson.info/2018/09/laravel-pagination-using-ajax.html -->
<div class="container full_sc">
    <div class="col-sm">
        <h1>Data</h1>
        <div class="row blog">
            <div class="col-sm-4">
                <div class="main-box">
                    <h1 style="top:0px;">Last user login</h1>
                    <div class="scrollbar">
                    @for ($i = 0; $i <= 2; $i++) <div class="col-sm img-resize sub-box">
                        <div class="row">
                            <div class="col-sm-4">
                                <img class="person" src="http://begmetobuyit.com/application/css/images/noImage.jpg" alt="person">
                            </div>
                            <div class="col-sm-8">
                                <h4 style="display: inline;">showname user</h4>
                                show datetime
                                </div>
                        </div>
                </div>
                <br>
                @endfor
                </div>
            </div>
        </div>

        <div class="row blog">
            <div class="col-sm-4">
                <div class="main-box ">
                    <h1 style="top:0px;">Last blog update</h1>
                    <div class="scrollbar">
                    @for ($i = 0; $i <= 5; $i++) <div class="col-sm img-resize sub-box">
                        <div class="row">
                            <div class="col-sm-4">
                                <img class="view" src="https://www.w3schools.com/css/img_lights.jpg" alt="view">
                            </div>
                            <div class="col-sm-8">
                                <h4 style="display: inline;">showname user</h4>
                                show datetime
                            </div>
                        </div>
                </div>
                <br>
                @endfor
                </div>
            </div>
        </div>

    <div class="col-sm-4">
        <div class="main-box">
            <h1>Something</h1>
            <p>Show something</p>
        </div>
    </div>
</div>
</div>
</div>

@endsection