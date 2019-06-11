@extends('home')
@section('content')

<div class="container">
    <div class="col-sm-4">
        <h1>Dashboard -> User</h1>
    </div>

    <table class="table table-bordered table-striped" align="center">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>email_verified_at</th>
            <th>remember_token</th>
            <th>created_at</th>
            <th>updated_at</th>
            
            @foreach($users as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->email_verified_at}}</td>
            <td>{{$row->remember_token}}</td>
            <td>{{$row->created_at}}</td>
            <td>{{$row->updated_at}}</td>
        </tr>
        @endforeach
        </tr>
    </table>
</div>
<div class="container">
    <div class="col-sm-1">
        <div class="btn btn-success">
            ss
        </div>
    </div>
</div>

@endsection