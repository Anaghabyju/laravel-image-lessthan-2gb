
@section('content')
@if(Session::has('success'))
<div class="alert alert-success">
  {{Session::get('success')}}
</div>
@endif
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

  <div class="card" style="width:50%;margin-left:20%; margin-top:5%;">
  <div class="card-body">
    <h2 style="text-align: center; text-decoration:underline;">REGISTRATION</h2>
  <form action="{{ route('create') }}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="row mb-3" style="margin-top: 5%;margin-left: 10%;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="inputEmail3" name="name" >
      @if ($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
     @endif 
    </div>
  </div>
  <div class="row mb-3" style="margin-top: 5%;margin-left: 10%;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">email</label>
    <div class="col-sm-8">
      <input type="email" class="form-control" id="inputEmail3" name="email">
      @if ($errors->has('email'))
     <span class="text-danger">{{ $errors->first('email') }}</span>
      @endif
    </div>
  </div>
 
  <div class="row mb-3" style="margin-top: 5%;margin-left: 10%;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">image</label>
    <div class="col-sm-8">
      <input type="file" class="form-control" id="inputEmail3" name="image" >
      @if ($errors->has('image'))
    <span class="text-danger">{{ $errors->first('image') }}</span>
    @endif
    </div>
  </div>
 
    <div class="row mb-3"style="margin-left: 10%;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputEmail3" name="password" >
      @if ($errors->has('password'))
     <span class="text-danger">{{ $errors->first('password') }}</span>
    @endif
    </div>
  </div>
   <div class="row mb-3" style="margin-top: 5%;margin-left: 10%;">
    <label for="inputEmail3" class="col-sm-2 col-form-label">confim_password</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputEmail3" name="confirm_password">
      @if ($errors->has('confirm_password'))
    <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
    @endif
    </div>
  </div>
  <button type="submit" class="btn btn-primary" style="margin-left: 40%;">Register</button>
  <a style="margin-left:5%;color:green;" href="{{route('showlogin')}}">Login</a>
</form>

  </div>
</div>

  </body>
</html>