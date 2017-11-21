@extends('layouts.master')

@section('Sign In Page', 'Sign In')

@section('head')
    {!!     HTML::style('/css/sign.css') !!}
@stop

@section('content')
    <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                </div>
                <div style="padding-top:30px" class="panel-body" >
                    {!! Form::open(['route' => 'auth.login-post', 'class' => 'form-horizontal form-signin', 'role' => 'form' ] ) !!}
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12">
                        @include('elements.status')
                    </div>
                    {!! csrf_field() !!}
                    <h2 class="form-signin-heading">Please sign in</h2>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autofocus', 'id' => 'inputEmail' ]) !!}
                    </div>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required',  'id' => 'inputPassword' ]) !!}
                    </div>
                    <div class="checkbox">
                        <label>
                            {!! Form::checkbox('remember', 1) !!} Remember me

                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <p><a href="/password">Forgot password?</a></p>
                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                Don't have an account!
                                <a href="/register" >
                                    Sign Up Here
                                </a>
                            </div>
                        </div>
                    </div>
                    <p class="or-social">Or Use Social Login</p>

                    <a href="{{route('social.redirect', 'facebook')}}" class="btn btn-lg btn-primary btn-block facebook" type="submit">Facebook</a>
                    <a href="#" class="btn btn-lg btn-primary btn-block twitter" type="submit">Twitter</a>
                    
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection