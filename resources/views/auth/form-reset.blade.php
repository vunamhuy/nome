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
                    <div class="col-md-12">
                        {!! Form::open(array( 'route' => ['auth.reset-post', 'token' => $token] , 'class' => 'form-horizontal')) !!}
                            @include('errors.errors_messages')
                            <fieldset>
                                <!-- Text input-->
                                <h2 class="form-signin-heading">Set New Password</h2>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Password</label>
                                    <div class="col-md-9">
                                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'required',  'id' => 'inputPassword', 'autofocus' ]) !!}

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" >Password Confirmation</label>
                                    <div class="col-md-9">
                                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Password confirmation', 'required',  'id' => 'inputPasswordConfirmation' ]) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Change</button>
                                </div>
                            </fieldset>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection