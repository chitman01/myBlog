@extends('layouts.app')
@section('content')
<style>
    .card_body {
        width: 400px;
        padding: 5px 5px 5px 5px
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
                <div class="card">
                    <img class="card-img-top" src="{{$row->image}}" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">{{$row->title}}</h4>
                        <p class="card-text">{{$row->detail}}</p>
                    </div>
                </div>
            </div>
</div>
@endforeach
</div>

</div>

@yield('content')
@endsection