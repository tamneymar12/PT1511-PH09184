<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- định nghĩa phần thay đổi để đưa style vào -->
    @yield('style')
</head>

<body>
<header><h1 style="text-align: center;" class="header">@yield('header')</h1></header>
    @yield('content')
    <footer>@yield('footer')</footer>
    @yield('script')
</body>
</html>
