@extends("layouts.master")
@section("content")
    <script type="text/javascript">
        function hideAnimation() {

            $(".alert").fadeTo(500, 0).slideD(500, function() {
                $(this).hide();
            });
        }
        window.setTimeout(hideAnimation(), 2500);
    </script>
    <div class="col-12  ">
        <div class="col-12 d-flex flex-row justify-content-end p-5">

            <a href="{{route('client.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add Client</a>
        </div>

        @if($message=Session::get('delete'))
            <div class="alert alert-danger" role="alert">   {{$message}}
            </div>
        @endif

        @if($message=Session::get('create'))
            <div class="alert alert-success" role="alert">
               {{$message}}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Email</th>
                <th scope="col">Name</th>
                <th scope="col">Created at</th>
                <th scope="col">Options</th>
            </tr>
            </thead>
            <tbody>
           @foreach($clients as $client)
               <tr>
                   <th scope="row">{{$client->id}}</th>
                   <td>{{$client->email}}</td>
                   <td>{{$client->name}}</td>
                   <td>{{$client->created_at}}</td>
                   <td>
                       <div class="d-flex flex-row ">
                           <a href="" class="btn  btn-info m-2"> modify</a>
                           <a href="{{route('client.show',$client)}}" class=" btn btn-primary m-2"> details</a>
                           <form action="{{ route('client.destroy',$client) }}" method="POST">
                               @csrf
                               @method("DELETE")
                               <button type="submit " class="btn btn-danger p-2"> delete</button>
                           </form>
                       </div>
                   </td>
               </tr>
           @endforeach

            </tbody>
        </table>


    </div>
@endsection
