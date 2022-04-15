
   @extends("layouts.master")
   @section("content")
       <form action="{{ route('client.store') }}" method="POST">
           @csrf

           <div class="form-group">
               <div class="d-flex flex-row p-2">
                   <div class="col-3">
                       <label for="exampleInputEmail1">Email address : </label>
                   </div>
                   <input   name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
               </div>

           </div>

           <div class="form-group">
               <div class="d-flex flex-row p-2">
                   <div class="col-3">
                       <label for="exampleInputEmail1">Client Name : </label>
                   </div>
                   <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
               </div>

           </div>


           <div class="col-12 d-flex justify-content-center p-2">
               <button type="submit" class="btn btn-primary ">Submit</button>
           </div>
       </form>
   @endsection
