
@auth
<style>
    .blog {
        padding: 0px 0px 10px 0px;
    }

    .center {
        display: table;
        margin: 0 auto;
    }

    .full_sc {
        width: 100%;
    }
</style>

<div class="container full_sc">
    <div class="col-sm blog">
        <h1>Dashboard -> User</h1>
    </div>

    <div class="col-sm" border="1">
        <table class="table table-bordered table-striped" align="center">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>email_verified_at</th>
                <th>remember_token</th>
                <th>type</th>
                <th>created_at</th>
                <th>updated_at</th>
                @foreach($user as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->email}}</td>
                <td>{{$row->email_verified_at}}</td>
                <td>{{$row->remember_token}}</td>
                <td>{{$row->type}}</td>
                <td>{{$row->created_at}}</td>
                <td>{{$row->updated_at}}</td>
            </tr>
            @endforeach
            </tr>
        </table>
    </div>

</div class="row">
    <div class="col-sm-2">
    <a href="{{route('index')}}" class="btn btn-info">back to index</a>
</div>

@endauth
