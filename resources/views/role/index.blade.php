<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Adress</th>
    </tr>

    <tbody>
        @foreach ($users as $data )
        <th > {{$data['id']}}</th>
        <th > {{$data['name']}}</th>
        <th > {{$data['address']}}</th>

        @endforeach

    </tbody>
    </table>
</body>
</html>
