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
        background-color:white;
        padding-bottom: 10px;
    }

    .right {
        float: right;
    }
    li:nth-child(odd) {
    color: #777;
}
li:nth-child(even) {
    color: blue;
}
</style>
<meta name="_token" content="{{ csrf_token() }}">

<div class="container full_sc" >
    <div class="col-sm">
        <h1>Dashboard -> blog</h1><!-- https://www.itoffside.com/php-search-mysql-by-ajax/ -->
        <div class="row" id="blog">
            <div class="col-sm-1">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Add Blog
                </button>
            </div>
            <div class="col-sm-2">
                <p>Page -> </p>
            </div>
            <div class="right">
            <form class="form-inline right" name="searchform" id="searchform">
                <div class="form-group">
                    <label for="textsearch_blog">Blog</label>
                    <input type="text" name="textsearch_blog" id="textsearch_blog" class="form-control" placeholder="user search" autocomplete="off">
                </div>
            </form>
            </div>
            
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
    <div class="alert alert-success">
        <p>{{ \Session::get('success')}}</p>
    </div>
    @endif
    @if(\Session::has('delete'))
    <div class="alert alert-danger">
        <h2>{{ \Session::get('delete')}}</h2>
    </div>
    @endif
    
    <div class="col-sm table-responsive" border="1">
        <table class="table table-bordered table-striped" align="center">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>detail</th>
                    <th>image_filename</th>
                    <th>original_image_filename</th>
                    <th>created_at</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($blog as $row)
                <tr id="tr{{$row->id}}">
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
                        
                        <button type="submit" class="btn btn-danger delete_blog" id="{{$row->id}}">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>

        <div class="center">
            <ul class="pagination" role="navigation">
                <li class="page-item page-item_Previous disabled" aria-label="« Previous">
                    <a class="page-link a" href="#" rel="previous">‹</a>
                </li>
                <?php
                $nub = $count;
                for ($i = 0; $i <= $count; $i++) {
                    ?>
                    <li class="page-item"><a class="page-link a" href="#" id="page<?php echo ($i + 1); ?>"><?php echo ($i + 1); ?></a></li>
                    <?php
                    $count -= 3;
                }
                ?>
                <li class="page-item page-link_Next">
                    <a class="page-link a" href="#" rel="next" aria-label="Next »">›</a>
                </li>
            </ul>
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

<script>
    var page_num = 1;

        $(document).on('keyup',"#textsearch_blog", function() {
            var value = $(this).val();
            console.log(value);
            $.ajax({
                type: 'get',
                url: '{{URL::to('search_blog')}}',
                data: {
                    'search': value
                },
                success: function(data) {
                    console.log("success ajax");
                    $('tbody').html(data);
                },
                error: function(data) {
                    //alert(data.responseText)
                    console.log("error ajax");
                }
            });
        });

        $(document).on('click',".a",function() {
            var nub = <?php echo $nub; ?>;
            var input_data = $(this).text();
            if(isNaN(input_data)){
                if(input_data=='‹'){
                    var number_of_page = page_num -= 1;
                } else{
                    console.log("input_data : "+input_data);
                    var number_of_page  = page_num += 1;
                }

                console.log("number_of_page : "+number_of_page);
                page_num = parseInt(number_of_page);
                console.log("< >");
            }else{
                console.log("num");
                page_num = parseInt(input_data);
                console.log(page_num);
            }
                var data1 = page_num * 3;
                var data2 = data1 - 2;
            $.ajax({
                type: 'get',
                url: '{{URL::to('Pagination_blog')}}',
                data: {
                    "data1": data1,
                    "data2": data2,
                },
                success: function(data) {
                    console.log("success ajax");
                    $('tbody').html(data);
                },
                error: function(data) {
                    //alert(data.responseText)
                    console.log("error ajax");
                }
            });
            
            if(page_num!=1){
                $(".page-item_Previous").removeClass("disabled");
            }else{
                $(".page-item_Previous").addClass("disabled");
            }
            if(page_num>(nub%3)){
                $(".page-link_Next").addClass("disabled");
            }else{
                $(".page-link_Next").removeClass("disabled");
            }
            

        });
</script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'csrftoken': '{{ csrf_token() }}'
        }
    });
</script>

@endauth