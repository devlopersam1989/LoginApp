<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
       <form action="{{ route('welcome') }}" method="post">
       @csrf
            <div class="form-group">                
                <label>User Name</label>
                <input type="text" id="username" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn_login">Login</button>
        </form>
    </body>
</html>
