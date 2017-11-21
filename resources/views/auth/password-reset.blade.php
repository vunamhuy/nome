@extends('layouts.master')

@section('Sign In Page', 'Sign In')

@section('head')
    {!!     HTML::style('/css/sign.css') !!}
@stop

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Sign In</div>
                </div>
                <div style="padding-top:30px" class="panel-body" >
                    
                    {!! Form::open(['url' => '#', 'class' => 'form-signin' ] ) !!}

                    @include('elements.status')

                    <h2 class="form-signin-heading">Password Reset</h2>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email address', 'required', 'autofocus', 'id' => 'inputEmail' ]) !!}

                    <br />
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Send me a reset link</button>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection