@extends("layouts.master")
@section("content")
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <div class="d-flex flex-column card-text">
                <div> {{$client->name}}</div>
                <div> {{$client->email}}</div>
                <div> {{$client->created_at}}</div>

            </div>
        </div>
    </div>

@endsection

