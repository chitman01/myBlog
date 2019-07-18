@extends('layouts.app')
@section('content')
<script>

$(document).ready(function(){
  $("#card_body").mouseenter(function(){
        $(this).hide();
  });
});

</script>
<style>
    .card_body {
        width: 400px;
        padding: 5px 5px 5px 5px;
        color: black;
    }

    .container a {
        color: black;
    }

    .center {
        display: table;
        margin: 0 auto;
    }
</style>
<div class="container">
    <h1>Home</h1>
</div>
<div class="container">
    <div class="row">
        @foreach($blog as $row)
        <div class="col-sm-4 card_body">
            <div class="container ddc">
                <a action="{{action('HomeController@check',$row->title)}}">
                    {{csrf_field()}}
                    <div class="card">
                        <img class="card-img-top" src="{{url('uploads/'.$row->image_filename)}}" alt="{{$row->image_filename}}" style="width:100%">
                        <div class="card-body">
                            <h3 type="text" class="card-title ">{{$row->title}}</h3>
                            @php
                                $str = "{$row->detail}"; 
                                echo $str; 
                            @endphp
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="center">
        {!! $blog->render() !!}
    </div>
    
    <a href="{{route('index')}}" class="btn btn-info">back to index</a>
</div>

@endsection