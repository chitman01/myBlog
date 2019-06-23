
@auth
<style>
    #blog {
        padding: 0px 0px 10px 0px;
    }

    .center {
        display: table;
        margin: 0 auto;
    }

    .full_sc {
        width: 100%;
    }

    .right{
        float: right;
    }
</style>

<div class="container full_sc">
    <div class="col-sm">
        <h1>Dashboard -> blog</h1><!-- https://www.itoffside.com/php-search-mysql-by-ajax/ -->
        <div class="col" id="blog">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Add Blog
            </button>
            
            <form class="form-inline right" name="searchform" id="searchform">
                <div class="form-group">
                    <label for="textsearch" >User</label>
                    <input type="text" name="itemname" id="itemname" class="form-control" placeholder="user search" autocomplete="off">
                </div>
                <button type="button" class="btn btn-primary" id="btnSearch">
                <span class="glyphicon glyphicon-search"></span>
                user
                </button>
            </form>

        </div>

    </div>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success')}}</p>
    </div>
    @endif
    @if(\Session::has('delete'))
    <div class="alert alert-danger">
        <h2>{{ \Session::get('delete')}}</h2>
    </div>
    @endif
    <div class="col-sm" border="1">
        <table class="table table-bordered table-striped" align="center">
            <tr>
                <th>id</th>
                <th>title</th>
                <th>detail</th>
                <th>image_filename</th>
                <th>original_image_filename</th>
                <th>created_at</th>
                <th>Delete</th>
            </tr>
            @foreach($blog as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->title}}</td>
                <td>
                    @php
                    echo substr($row->detail,1,10)."....";
                    @endphp

                </td>
                <td>
                    @php
                    echo substr($row->image_filename,1,10)."....";
                    @endphp
                </td>
                <td>
                    @php
                    echo substr($row->original_image_filename,1,10)."....";
                    @endphp
                </td>
                <td>{{$row->created_at}}</td>
                <td>
                    <form method="post" class="delete_form" action="{{action('BlogController@destroy',$row->id)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE" />
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>

        <div class="center">
            {!! $blog->render() !!}
        </div>

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

    </div>

    <br>
    <a href="{{route('index')}}" class="btn btn-info">back to index</a>
</div>

@endauth
