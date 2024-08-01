<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            .containerdiv {
                width: 50%;
                margin-left: 35rem;
            }
        </style>
    </head>
    <body>
        <div class="containerdiv"> 
            <h1>Registration Form</h1>
            <form class="registrationFrom" action="{{ route('loginPageValidation') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="form-control" type="text" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input class="form-control" type="email" id="email" name="email">
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password">
                    @if ($errors->has('password'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <button class="btn btn-primary" type="submit" name="btn_submit">Register</button>
                <p>
                    Note: <br>
                    Password minimum 8 character. <br>
                    Atlease one uppercase characters (A-Z). <br>
                    Atlease one lowercase characters (a-z). <br>
                    Atlease one numeric (0-9). <br>
                    Atlease one special character (For example: !, $, #, or %).
                </p>
            </form>
        </div>
    </body>
</html>


