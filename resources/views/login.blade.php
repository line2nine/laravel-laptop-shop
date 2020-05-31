@extends('home.master')
@section('login')
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 md-padding">
            <h1 class="align-center">Login</h1>
            <br>

            <form class="signin" action="{{route('login')}}" method="post">
                @csrf
                <input type="email" name="username" value="" placeholder="E-mail" required="" class="form-control" />
                @if($errors->first('username'))
                    <p class="text-danger"><sub>*{{$errors->first('username')}}</sub></p>
                @endif
                <br>
                <input type="password" name="password" value="" placeholder="Password" required="" class="form-control" />
                @if($errors->first('password'))
                    <p class="text-danger"><sub>*{{$errors->first('password')}}</sub></p>
                @endif
                <br>

                <button type="submit" class="btn btn-primary">Sign In</button>
                <a href="#forgin-password" data-action="Forgot-Password" class="xs-margin">Password recovery ></a>
                <br><br>

                <p>
                    If you already have an account with us, please login.
                </p>
                <hr class="offset-xs">

                <a href="#facebook" class="btn btn-facebook"> <i class="ion-social-facebook"></i> Login with Facebook </a>
                <hr class="offset-sm">

                <p>
                    Don't have an account? Create one now! <a href="../signup/"> Registration > </a>
                </p>

            </form>
        </div>
    </div>
@endsection
