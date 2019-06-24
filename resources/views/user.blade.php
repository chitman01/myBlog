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
    }

    .right {
        float: right;
    }
</style>
<meta name="_token" content="{{ csrf_token() }}">

<div class="container full_sc">
    <div class="col-sm">
        <h1>Dashboard -> User</h1>
        <div class="col" id="blog">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Add Blog
            </button>

            <form class="form-inline right" name="searchform" id="searchform">
                <div class="form-group">
                    <label for="textsearch">User</label>
                    <input type="text" name="textsearch" id="textsearch" class="form-control" placeholder="user search" autocomplete="off">
                </div>
            </form>
        </div>
    </div>



    <div class="col-sm" border="1">
        <table class="table table-bordered table-striped" align="center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>email_verified_at</th>
                    <th>remember_token</th>
                    <th>type</th>
                    <th>created_at</th>
                    <th>updated_at</th>
                </tr>
            </thead>
            <tbody>
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
                    @endforeach
                </tr>
            </tbody>

        </table>
    </div>

</div class="row">
<div class="col-sm-2">
    <a href="{{route('index')}}" class="btn btn-info">back to index</a>
</div>

<script>
    $(document).ready(function() {
        $("#textsearch").on('keyup', function() {
            var value = $(this).val();
            console.log(value);
            $.ajax({
                type: 'get',
                url: '{{URL::to('
                search ')}}',
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
    });
</script>


@endauth