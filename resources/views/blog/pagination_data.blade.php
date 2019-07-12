<div class="col-sm table-responsive" border="1">
    <table class="table table-bordered table-striped" align="center">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>detail</th>
            <th>image_filename</th>
            <th>original_image_filename</th>
            <th>created_at</th>
            <th>Delete</th>
        </tr>
        @foreach($data as $row)
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
                        <a href="#" style="padding:5px">
                            <span class="glyphicon glyphicon-search"></span>
                        </a>
                        <button type="submit" class="btn btn-danger delete_blog" id="{{$row->id}}">Delete</button>
                    </td>
                </tr>
        @endforeach
    </table>

    <div align="center">
        {!! $data->links() !!}
    </div>
    

</div>
