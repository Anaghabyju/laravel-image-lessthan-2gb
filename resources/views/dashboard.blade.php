<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

 <form action="" method="post" enctype="multipart/form-data">
  <div class="card" style="width:30%;margin-left:20%; margin-top:5%;" >
  <div class="card-body"style="text-align:center;">
  <img class="img-fluid rounded-circle" src="{{asset('storage/images/'.$data->image) }}" width="100" height="300" style="margin-left:5%;"><br>
  <b>name : {{ $data->name}}</b><br><br>
  <b>email : {{ $data->email}}</b><br><br>
 
  
  
  </div>
  </div>
 </form>
  </body>
</html>