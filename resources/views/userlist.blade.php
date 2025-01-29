<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1 style="text-align: center;">UserList</h1>



<table border="1" width="50%" style="margin:auto">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
    </tr>

    @foreach  ($users as $user)
<tr>
<th>{{$user["id"]}}</th>
<th>{{$user["name"]}}</th>
<th>{{$user["address"]}}</th>



</tr>
    @endforeach



</table>


    
</body>
</html>