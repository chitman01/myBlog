
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" action="{{url('blog')}}" enctype="multipart/form-data">
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