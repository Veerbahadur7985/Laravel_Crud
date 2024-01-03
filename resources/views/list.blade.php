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
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="/">Member</a>
    </li>
  </ul>
</nav>
<div class="container">
    <div class="text-right"><a href="{{ url('add') }}" class="btn btn-dark mt-2">New Product</a></div>
    <h1>Products</h1>

<div class="container">           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th colspan="4">Action</th>
      </tr>
    </thead>
   @foreach($Members as $Member)
   <tbody>
      <tr>
        <td>{{$Member['id']}}</td>
        <td>{{$Member['name']}}</td>
        <td>{{$Member['email']}}</td>
        <td>{{$Member['address']}}</td>
        <td><a href="{{'edit/'.$Member['id']}}">Edit</a></td>
        <td><a href="{{'delete/'.$Member['id']}}">Delete</a></td>
      </tr>
    </tbody>
   @endforeach
  </table>
</div>

</body>
</html>
