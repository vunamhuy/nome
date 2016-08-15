@extends('layouts.master')

@section('Sign In Page', 'Sign In')

@section('head')
    {!!     Html::style('/css/sign.css') !!}
@stop

@section('sidebar')
    @parent
@endsection

@section('content')
<div class="container">
    <div style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
            </div>
            <div class="panel-body" >
                {!! Form::open(['route' => 'auth.register-post', 'class' => 'form-signin form-horizontal', 'role' => 'form' ] ) !!}

                @include('errors.errors_messages')

                <h2 class="form-signin-heading">Please register</h2>
                <div class="form-group">
                    <label for="inputEmail"  class="col-md-3 sr-only">Email address</label>
                    <div class="col-md-12">
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autofocus', 'id' => 'inputEmail' ]) !!}
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="inputFirstName" class="col-md-3 sr-only">Name</label>
                    <div class="col-md-12">
                        {!! Form::text('name', null, ['class' => 'form-control ', 'placeholder' => 'Name', 'required', 'id' => 'inputFirstName']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword" class="col-md-3 sr-only">Password</label>
                    <div class="col-md-12">
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required',  'id' => 'inputPassword' ]) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPasswordConfirm" class="col-md-3 sr-only">Confirm Password</label>
                    <div class="col-md-12">
                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password confirmation', 'required',  'id' => 'inputPasswordConfirm' ]) !!}
                    </div>      
                </div>

                <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>

                <p class="or-social">Or Use Social Login</p>

                <a class="btn btn-lg btn-primary btn-block facebook" type="submit">Facebook</a>
                <a class="btn btn-lg btn-primary btn-block twitter" type="submit">Twitter</a>
                <div class="form-group">
                    <div class="col-md-12 control">
                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                            Has an account
                            <a href="/auth/login" >
                                Login
                            </a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                
                
            </div>
        </div>
    </div>
</div>
@endsection