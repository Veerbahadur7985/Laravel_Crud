<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="">Edit</a>
    </li>
  </ul>
</nav>
<div class="container">
  <form action="/edit"method="post">
    @csrf 
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="hidden" class="form-control"name="id"value="{{$Members->id}}">
      <input type="text" class="form-control"name="name"value="{{$Members->name}}">
    </div>
    <div class="form-group">
      <label for="usr">Email:</label>
      <input type="email" class="form-control"name="email"value="{{$Members->email}}">
    </div>
    <div class="form-group">
      <label for="pwd">Address:</label>
      <input type="text" class="form-control"name="address"value="{{$Members->address}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>





</body>
</html>
