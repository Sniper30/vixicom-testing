<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Finance</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    
    <header class="Comp-div">
    @yield('header')
    </header>


    <div class="container">
        @yield('content')
    </div>

    <footer class="Comp-div">
    @yield('footer')
    </footer>
</body>
</html>