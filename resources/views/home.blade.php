@extends('layouts.app')
@section('content')
<style>
    .card_body {
        width: 400px;
        padding: 5px 5px 5px 5px;
        color:black;
    }

    .container a{
        color:black;
    }
</style>
<div class="container">
    <h1>Home</h1>
</div>
<div class="container">
    
    <div class="row">
        @foreach($data as $row)
        <div class="col-sm-4 card_body">
            <div class="container">
                <a href="#">
                <div class="card">
                    <img class="card-img-top" src="{{url('uploads/'.$row->image_filename)}}" alt="{{$row->image_filename}}" style="width:100%">
                    <div class="card-body">
                    <h3 class="card-title ">{{$row->title}}</h3>
                    <p class="card-text">{{$row->detail}}</p>
                    </div>
                </div>
                </a>
                
            </div>
</div>
@endforeach
</div>
<a href="{{route('index')}}" class="btn btn-info">back to index</a>
</div>

@yield('content')
@endsection