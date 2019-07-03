<style>
    .blog {
        padding: 10px 0px 10px 0px;
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
</style>

<div class="container full_sc">
    <div class="col-sm">
        <h1>Dashboard -> Profile</h1>
        <div class="col blog">
            <div class="container" align="center">
                <img src="http://begmetobuyit.com/application/css/images/noImage.jpg" alt="Paris" width="250" height="250">
            </div>
            <div class="row justify-content-sm-center blog">
                <div class="col-sm-2 col-sm-offset-4">
                    <h3>Name :</h3>
                </div>
                <div class="col-md-2 set">
                    <p>Halajugu mujuru</p>
                </div>

            </div>
            <div class="row justify-content-md-center blog">
                <div class="col-md-2 col-md-offset-4">
                    <h2>Contact</h2>
                </div>
                <div class="col-md-2 set">
                    <p>123/12 </p>
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
                        <label for="detail">detail</label>
                        <textarea type="text" name="detail" class="form-control" rows="5" id="detail"></textarea>
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