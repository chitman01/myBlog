@extends('layouts.nav')
@section('content')
<style>
    .textcenter {
        position: relative;
    }

    .center {
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        text-align: center;
        font-size: 18px;
    }

    .preview-adminpage {
        border: 1px solid red;
    }

    .showblog {
        max-width: 100%;
        border: none;
    }
</style>

@inject('blog', 'App\Http\Controllers\BlogController')
@inject('user', 'App\Http\Controllers\HomeController')


{{--
    <div class="container showblog">
        Monthly Revenue: {{ $blog->index() }}
</div>
--}}

<div class="container showblog">
        Monthly Revenue: {{ $user->user() }}
</div>





@endsection