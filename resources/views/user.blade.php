<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>
<div class="container-md pt-5">
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">User Name</th>
        <th scope="col">E-mail</th>
        <th scope="col">Phone</th>
        <th scope="col">Password</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($all_employees as $key => $value)
      <tr>
        <td>{{$value['employee_id']}}</td>
        <td>{{$value['fullname']}}</td>
        <td>{{$value['email']}}</td>
        <td>{{$value['mobile']}}</td>
        <td>{{$value['password']}}</td>
        <td><a href="edit/{{ $value['employee_id'] }}" role="button" class="btn btn-info">Edit</a></td>
        <td><a class="btn btn-danger" role="button" href="user/{{$value['employee_id']}}">Delete</a></td>
        @endforeach
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
