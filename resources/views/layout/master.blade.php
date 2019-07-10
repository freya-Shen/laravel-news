<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>公告</title>
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
</head>
<body>

<div class="header">
    <div class="logo">
        <a href="/">NEWS</a>
    </div>
</div>

<div class="banner">
    <div class="container">
        @yield('banner')
    </div>
</div>  

<div class="container">
    @yield('content')
</div>


</body>
</html>