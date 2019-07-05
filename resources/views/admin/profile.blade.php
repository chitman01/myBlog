<style>
    .blog {
        padding: 10px 0px;
    }

    img {
        border-radius: 50%;
    }

    .full_sc {
        width: 100%;
        background-color:white;
        padding-bottom: 10px;
    }

    .center {
        display: table;
        margin: 0 auto;
    }

    .set {
        padding: 20px 0px 1px 0px;
    }

    .detail_profile p{
        margin:20px;
        display: flex;
        justify-content: center;
        align-items: center;
        height:100px;
    }
</style>

<div class="container full_sc">
    <div class="col-sm">
        <h1>Dashboard -> Profile <span class="glyphicon glyphicon-user"></h1>
        <div class="row blog">
            <div class="col-sm-4" align="center">
                <img src="http://begmetobuyit.com/application/css/images/noImage.jpg" alt="Paris" width="250" height="250">
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-2" style="float:left">
                        <p><b>Id <span class="glyphicon glyphicon-user"> :</b></p>
                        <p><b>Name :</b></p>
                        <p><b>Email <span class="glyphicon glyphicon-envelope"> :</b></p>
                        
                    </div>
                    <div class="col-sm-4" style="float:">
                        <p>007</p>
                        <p>Jame ball</p>
                        <p>Jameball_007@jian.com</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2" style="float:left">
                        <p><b>Last login :</b></p>
                        
                    </div>
                    <div class="col-sm-4" style="float:">
                        <p>17:21:32 11/04/2019</p>
                    </div>
                </div>  	
                <div class="row">
                    <div class="col-sm-4">
                    <p><b>Last blog update <span class="glyphicon glyphicon-search"> :</span></b></p>
                    </div>
                    <div class="col-sm-8" style="float:">
                        <a href="#"><p>ปลากัดอย่ากัดตอบ</p></a>
                        <a href="#"><p>โดเรม่อนที่หายไป</p></a>
                        <a href="#"><p>ปลากัดอย่ากัดตอบ</p></a>
                        <a href="#"><p>โดเรม่อนที่หายไป</p></a>
                        <a href="#"><p>ปลากัดอย่ากัดตอบ</p></a>
                        <a href="#"><p>โดเรม่อนที่หายไป</p></a>
                        <a href="#"><p>ปลากัดอย่ากัดตอบ</p></a>
                        <a href="#"><p>โดเรม่อนที่หายไป</p></a>
                        <a href="#"><p>ปลากัดอย่ากัดตอบ</p></a>
                        <a href="#"><p>โดเรม่อนที่หายไป</p></a>
                        <a href="#"><p>ปลากัดอย่ากัดตอบ</p></a>
                        <a href="#"><p>โดเรม่อนที่หายไป</p></a>
                        <a href="#"><p>ปลากัดอย่ากัดตอบ</p></a>
                        <a href="#"><p>โดเรม่อนที่หายไป</p></a>
                        <a href="#"><p>ปลากัดอย่ากัดตอบ</p></a>
                        <a href="#"><p>โดเรม่อนที่หายไป</p></a>
                        <a href="#"><p>ปลากัดอย่ากัดตอบ</p></a>
                        <a href="#"><p>โดเรม่อนที่หายไป</p></a>
                        <a href="#"><p>ปลากัดอย่ากัดตอบ</p></a>
                        <a href="#"><p>โดเรม่อนที่หายไป</p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
        Edit Profile
    </button>
</div>


<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" action="" enctype="multipart/form-data">
                {{csrf_field()}}

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Blog Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" />
                    </div>
                    <div class="form-group">
                        <label for="image">image</label>
                        <input type="file" name="image">
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="submit" />
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>