<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    </style>
</head>
<body>
    <h1>hello</h1>
    <hr>



    <form action="{{url('rolecreate')}}" method="post">

        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name"><br>
            @error('name')
            <span style="color: red">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="department">Department</label><br>
            <input type="text" name="department">

            @error('department')
            <span style="color: red">{{$message}}</span>
             @enderror
           
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>




    </form>
</body>
</html>
