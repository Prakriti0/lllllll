<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row" >
            <div class="col-2" style="background-color: lightgray; height:1000px" >
                <h6 class=" text-center p-2">Welcome Admin</h6>
                <hr>
                <div class="d-grid  gap-2">
                  <a href="{{ route('list.s')}}"  class="btn btn-light rounded-0">Student List</a>
                  </div>
                  <div class="d-grid  gap-2">
                    <a href="{{ route('add.s')}}"  class="btn btn-light rounded-0">Addstudent</a>
                    </div>
                    <div class="d-grid  gap-2">
                      <a href="" class="btn btn-light rounded-0">light</a>
                      </div>   
            </div>
            <div class="col-10"> 
    