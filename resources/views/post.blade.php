<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    <title>Document</title>
</head>
<body>

  

<div class="bd-example">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Titre</th>
      <th scope="col">Description</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($contenuPosts as $key => $item)
    <form action="/delete/{{$item->id}}" method="post">
    @csrf
    <tr>
      <th scope="row">{{$key +1}}</th>
      <td>{{$item->id}}</td>
      <td>{{$item->titre}}</td>
      <td>{{$item->description}}</td>
      <td><a href="/edit/{{$item->id}}" class="btn btn-warning">Edit</a></td>
      <td><button type="submit" class="btn btn-danger"> Delete</button></td>
    </tr>
    </form>
      @endforeach
    
  </tbody>
</table>
</div>
</body>
</html>