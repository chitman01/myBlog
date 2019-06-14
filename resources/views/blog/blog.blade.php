@extends('layouts.app')
@section('content')
@auth
<style>
    .class-name {
        text-align: center;
        font-family: arial;
        font-size: 20px;
        padding: 20px;
        border: 3px solid red;
    }

    .ddc {
        text-align: center;
        font-family: arial;
        font-size: 20px;
        padding: 20px;
        border: 3px solid red;
    }

    #blog {
        padding: 0px 0px 10px 0px;
    }
</style>

<div class="container">
    <div class="col-sm-4">
        <h1>Dashboard -> blog</h1>
        <div class="container" id="blog">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Add Blog
            </button>
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
    <div class="container" border="1">
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
                <td>{{$row->detail}}</td>
                <td>{{$row->image_filename}}</td>
                <td>{{$row->original_image_filename}}</td>
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
                                <input type="file" name="image" >
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



        <!-- The Modal -->
        <div class="modal fade" id="myModal_edit">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Blog Heading</h4>
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
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <br>
    <a href="{{route('index')}}" class="btn btn-info">back to index</a>
</div>
@endauth
@endsection