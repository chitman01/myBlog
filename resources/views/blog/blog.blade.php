@extends('layouts.nav')
@section('content')
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
        background-color: white;
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

<div class="container full_sc">
    <div class="col-sm">
        <h1>Dashboard -> blog</h1><!-- https://www.itoffside.com/php-search-mysql-by-ajax/ -->
        <div class="row" id="blog">
            <div class="col-sm-1">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Add Blog
                </button>
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

    <div id="table_data">
        @include('blog.pagination_data')
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


    <br>
    <a href="{{route('index')}}" class="btn btn-info">back to index</a>
</div>



<script>
    $(document).ready(function() {

        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page) {
            $.ajax({
                url: "/pagination/fetch_data?page=" + page,
                success: function(data) {
                    $('#table_data').html(data);
                }
            });
        }
    });


    var page_num = 1;
    $(document).on('keyup', "#textsearch_blog", function() {
        var value = $(this).val();
        console.log(value);
        $.ajax({
            type: 'get',
            url: '{{URL::to('
            search_blog ')}}',
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
</script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'csrftoken': '{{ csrf_token() }}'
        }
    });
</script>

@endauth
@endsection