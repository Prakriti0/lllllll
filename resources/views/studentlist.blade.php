@include('sidebar')
    <h4 class="text-center">Student List</h4>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">S.N</th>
              <th scope="col">name</th>
              <th scope="col">phone</th>
              <th scope="col">Email</th>
              <th scope="col">Address</th>
              <th scope="col">Gender</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <?php $i=1;?>
          <tbody>
            @foreach ($students as $std)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$std->name}}</td>
              <td>{{$std->phone}}</td>
              <td>{{$std->Email}}</td>
              <td><textarea>{{$std->address}}</textarea></td>
              <td>{{$std->gender}}</td>
              <td>

                <!-- Button trigger modal -->
<button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$std->id}}">
  <i class="bi bi-pencil-square"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal-{{$std->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{Form::open(['route' => ['std.update', $std->id],'method'=>'PATCH'])}} 
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" value="{{$std->name}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" value="{{$std->Email}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input type="text" name="phone"value="{{$std->phone}}" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Address</label>
  <textarea class="form-control" name="address" >{{$std->address}}</textarea>  
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gender:</label> <br>
    @if($std->gender == "male")
    <input type="radio" name="gender" value="male" checked id="exampleInputPassword1">male
    <input type="radio" name="gender"  value="female"  id="exampleInputPassword1">female
    <input type="radio" name="gender" value="others" id="exampleInputPassword1">others
   
    @elseif($std->gender == "female")
    <input type="radio" name="gender" value="male"  id="exampleInputPassword1">male
    <input type="radio" name="gender"  value="female" checked  id="exampleInputPassword1">female
    <input type="radio" name="gender" value="others" id="exampleInputPassword1">others
    @else
    <input type="radio" name="gender" value="male"  id="exampleInputPassword1">male
    <input type="radio" name="gender"  value="female"   id="exampleInputPassword1">female
    <input type="radio" name="gender" value="others" checked id="exampleInputPassword1">others
    @endif
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
{{Form::close() }}
      </div>
    </div>
  </div>
</div>                
    <a href="{{route('std.delete', $std->id)}}" class="btn btn-danger btn-sm"><i class="bi bi-trash-fill"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
  </div>
@include('footer')