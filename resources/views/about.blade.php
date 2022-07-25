<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <ul class="nav justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route("home")}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route("about")}}">About us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route("team")}}">Our Team</a>
          </li>
      </ul>

    <h1 class="text-center text-success">About Us</h1>

</body>
</html>