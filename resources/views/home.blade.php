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
    @for($i=1;$i<=3;$i++) 
    <div class="row">
        @for($j=1;$j<=3;$j++) 
        <div class="col-sm-4 card_body">
            <div class="container">
                <div class="card">
                    <img class="card-img-top" src="https://www.serverprothai.com/wp-content/uploads/2018/01/dell-t440-fr.jpg" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    </div>
                </div>
            </div>

</div>
@endfor
</div>
@endfor
</div>

@yield('content')
@endsection