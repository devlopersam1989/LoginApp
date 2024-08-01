<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
            .containerLogincls {
                width: 29%;
                margin-left: 28rem;
            }
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="containerLogincls">
            <h2>Login</h2>
            <form action=" {{ route('login-user') }} " method="post">
        @csrf
        @if($errors->any())
           @foreach($errors->all() as $error)
           <div class="alert alert-danger"> {{ $error }} <br> </div>
           @endforeach
        @endif

        @if(Session::has('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
        @endif
                <div class="form-group">                
                    <label>Username:</label>
                    <input type="text" id="username" name="username" class="form-control">
                </div> <br>
                <div class="form-group">
                    <label>Password:</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div> <br>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </body>
</html>
