@extends('layouts.app')
@section('content')
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

<!--API    https://blog.pusher.com/build-rest-api-laravel-api-resources/
    CKEditor 
-->
<div class="form-group">

    <form action="{{route('view')}}" method="post" enctype="multipart/form-data" name="addform" class="form-horizontal" id="addform">
        <div class="form-group">
            <label for="title">Title</label>
            <input name="title" id="title" type="text" required class="form-control" placeholder="หัวข้อข่าว" />
        </div>
        <div class="form-group">
            <label for="image">Main image : </label>
            <input type="file" name="image">
        </div>
        <div class="form-group">
            <textarea name="detail"></textarea>
            <script>
                CKEDITOR.replace('detail');
            </script>
        </div>

    </form>


    @endsection