<style>
    .blog {
        padding: 10px 0px 10px 0px;
    }

    .full_sc {
        width: 100%;
        background-color: white;
        padding-bottom: 10px;
    }

    .center {
        display: table;
        margin: auto;
        padding-top: 5px;
        text-align:center;
    }

    .main-box {
        padding: 5px;
        background-color: burlywood;
        margin: 5px;
        
    }

    .sub-box {
        padding: 5px;

        border-style: double;
    }

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
</style>

<div class="container full_sc">
    <div class="col-sm">
        <h1>Dashboard</h1>
        <div class="row blog">
            <div class="col-sm-4">
                <div class="row main-box">
                    <div class="col-sm-6" style="float:left">
                        <h1>Users</h1>
                        Total user on this site:
                    </div>
                    <div class="col-sm-6 center">
                        11
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row main-box">
                    <div class="col-sm-8">
                        <h1>Something</h1>
                        Show something
                    </div>
                    <div class="col-sm-4">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="row main-box">
                    <div class="col-sm-8">
                        <h1>Total Blog</h1>
                        Total blog on this site:
                    </div>
                    <div class="col-sm-4">

                    </div>
                </div>
            </div>

        </div>
    </div>
</div><br>

<div class="container full_sc">
    <div class="col-sm">
        <h1>Data</h1>
        <div class="row blog">
            <div class="col-sm-4">
                <div class="main-box">
                    <h1 style="top:0px;">Last user login</h1>

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


        <div class="row blog">
            <div class="col-sm-4">
                <div class="main-box">
                    <h1 style="top:0px;">Last blog update</h1>

                    @for ($i = 0; $i <= 2; $i++) <div class="col-sm img-resize sub-box">
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

    <div class="col-sm-4">
        <div class="main-box">
            <h1>Something</h1>
            <p>Show something</p>
        </div>
    </div>
</div>
</div>
</div>