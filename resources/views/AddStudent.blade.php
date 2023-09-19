@include('sidebar')
<h2 class="text-center">Add Students</h2>
<hr>


<div class="container">
<div class="row">
    <div class="col-5 mx-auto card p-4">
   {{Form::open(['route' => 'std.store','method'=>'Post','enctype'=>'multipart/form-data']) }} 
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input type="text" name="phone" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Address</label>
  <textarea class="form-control" name="address"></textarea> 
  </div>

  <div class="mb-3">
    <label for="disabledTextInput" class="form-label">Upload image</label> <br>
    <input type="file" id="disabledTextInput" name="image" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gender:</label> <br>
    <input type="radio" name="gender" value="male" id="exampleInputPassword1">male
    <input type="radio" name="gender"  value="female"  id="exampleInputPassword1">female
    <input type="radio" name="gender" value="others"  id="exampleInputPassword1">others
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
{{Form::close() }}
    </div>
</div>
</div>
@include('footer')