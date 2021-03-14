<!DOCTYPE html>
<html lang='ja'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>人生逆転サロン</title>
</head>
<body>
    <header class="navbar navbar-dark bg-danger">
    <div class="container">
        <a class="navber-brand text-white" style="text-decoration: none;" href="{{ url('')}}">Gyakuten</a>
    </div>
    </header>
    
    @yield('content')
    
</body>
</html>