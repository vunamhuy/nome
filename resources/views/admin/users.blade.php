
@extends('layouts.admin')

@section('New Product', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<div id="page-wrapper">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title">New User</div>
        </div>
        <div class="panel-body" >
            {!! Form::open(['route' => 'auth.register-post', 'class' => 'form-signin form-horizontal', 'role' => 'form' ] ) !!}
                @include('errors.errors_messages')
                @include('elements.status')
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Email</label>
                        <div class="col-md-9">
                            <input id="email" name="email" type="text" placeholder="User email" class="form-control input-md" required="">
                        </div>
                    </div>
                   <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Name</label>
                        <div class="col-md-9">
                            <input id="name" name="name" type="text" placeholder="User name" class="form-control input-md" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Password</label>
                        <div class="col-md-9">
                            {!! Form::password('password', ['class' => 'form-control input-md', 'placeholder' => 'Password', 'required' ]) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Confirm Password</label>
                        <div class="col-md-9">
                        {!! Form::password('password_confirmation', ['class' => 'form-control input-md', 'placeholder' => 'Password confirmation', 'required',  'id' => 'inputPasswordConfirm' ]) !!}
                        </div>      
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Role</label>
                        <div class="col-md-9">
                            {!! Form::select('role', $roles)!!}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="submit"></label>
                        <div class="col-md-9">
                            <button id="submit" name="submit" class="btn btn-primary">Insert</button>
                        </div>
                    </div>

                </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
