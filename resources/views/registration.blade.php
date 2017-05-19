<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>

    <!-- Bootstrap - Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="http://kiarie.dev/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="height: 100%;" >

<div class="container"  style="height: 100%; margin-top: 10%;">
    <div class="row" style="vertical-align: middle;">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Register</h3>
                </div>
                <div class="panel-body">
                    {!! Form::open(['url' => 'register']) !!}
                    <fieldset>
                        <div class="form-group {{ ($errors->has('username')) ? 'has-error' : '' }}">
                            <input class="form-control" placeholder="Username" name="username" type="text" value="{{ old('username') }}">
                            {!! ($errors->has('username') ? $errors->first('username', '<p class="text-danger">:message</p>') : '') !!}
                        </div>
                        <div class="form-group  {{ ($errors->has('password')) ? 'has-error' : '' }}">
                            <input class="form-control" placeholder="Password" name="password" type="password">
                            {!! ($errors->has('password') ? $errors->first('password', '<p class="text-danger">:message</p>') : '') !!}
                        </div>
                        <div class="form-group  {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
                            <input class="form-control" placeholder="Confirm Password" name="password_confirmation" type="password">
                            {!! ($errors->has('password_confirmation') ? $errors->first('password_confirmation', '<p class="text-danger">:message</p>') : '') !!}
                        </div>
                        {{ Form::token() }}
                        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign Me Up!">
                    </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- Restfulizer.js - A tool for simulating put,patch and delete requests -->
<script src="http://kiarie.dev/restfulizer.js"></script>
</body>
</html>