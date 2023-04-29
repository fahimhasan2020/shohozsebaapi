<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visual</title>
</head>
<body>
    <h1>Visual</h1>
    <ul>
    @foreach ($departments as $d)
        <li><p>{{$d->name}}</p><img src='/images/departments/{{$d->imagepath}}' style="height:50px;width:50px" /></li>
    @endforeach
</ul>
</body>
</html>