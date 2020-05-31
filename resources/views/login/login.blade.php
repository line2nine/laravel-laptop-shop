<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='https://use.fontawesome.com/releases/v5.8.1/css/all.css'>
    <link rel="stylesheet" href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    @notify_css
    @notify_js
    @include('sweetalert::alert')
    <title>Login</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form class="box" action="{{route('login')}}" method="post">
                @csrf
                <h1>Login</h1>
                <p class="text-muted"> Please enter your login and password!</p>
                <input type="text" name="username" placeholder="Username" required>
                @if($errors->first('username'))
                    <p class="text-danger"><sub>*{{$errors->first('username')}}</sub></p>
                @endif
                <input type="password" name="password" placeholder="Password" required>
                @if($errors->first('password'))
                    <p class="text-danger"><sub>*{{$errors->first('password')}}</sub></p>
                @endif
                <a class="forgot text-muted" href="#">Forgot password?</a>
                <input type="submit" name="" value="Login" href="#">
                <div class="col-md-12">
                    <ul class="social-network social-circle">
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fab fa-google-plus"></i></a>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
    </div>
</div>
@notify_render
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</body>
</html>
