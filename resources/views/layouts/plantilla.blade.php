<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="C:\xampp\htdocs\blog\resources\css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>

@include('layouts.partials.navbar')

<body>
    @yield('content')

</body>

</html>