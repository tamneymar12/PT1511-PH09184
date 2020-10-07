<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header><h1 class="header">Header login</h1></header>
        <form action="{{ route('post-login') }}" method="POST" >
            @csrf
            <input type="text" name="username" placeholder="Username" >
            <input type="password" name="password" placeholder="Password" >
            <button>Submit</button>
        </form>
        <footer>Footer Login</footer>
</body>
</html>
