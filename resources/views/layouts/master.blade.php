<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document Tracking</title>
    <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
</head>
<body>
@include('partials.header')
<div class="main">
    @yield('content')
</div>
</body>
</html>