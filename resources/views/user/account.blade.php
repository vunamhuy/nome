
@extends('layouts.master')

@section('Profile', 'Page profile')

@section('sidebar')
    @parent
@endsection

@section('content')
<div id="page-wrapper">
    <div class="panel panel-default top10">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-6">
                    Profile
                </div>
            </div>
        </div>
        <div class="panel-body">
        {!! Form::model($user, array( 'route' => ['user.account'] , 'files' => true, 'class' => 'form-horizontal')) !!}
                <fieldset>
                    <!-- Text input-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label panel-heading" for="name">Your avatar</label>
                                <div class="col-md-12">
                                    <div class="col-sm-12">
                                        {!! Form::file('avatar', ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-sm-12 panel-body">
                                        {!! HTML::image(route('images', isset($user->avatar->filename)?$user->avatar->filename:null ), $user->name, ['class' => 'img-responsive']) !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="name">Your name</label>
                                <div class="col-md-10">
                                    {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textarea">Birthday</label>
                                <div class="col-md-10">
                                    <div class='col-sm-2'>
                                        {!! Form::select('year', $years, $user->year, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class='col-sm-2'>
                                        {!! Form::select('month', $months, $user->month, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class='col-sm-2'>
                                       {!! Form::select('day', $days, $user->day, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="textarea">Male/Female</label>
                                <div class="col-md-10">
                                    <div class='col-sm-2'>
                                        {!! Form::select('sexies', $sexies, $user->sexies, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="name">Your phone</label>
                                <div class="col-md-10">
                                    {!! Form::text('phone', $user->phone, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="name">Your email</label>
                                <div class="col-md-9">
                                    {!! Form::email('email', $user->email, ['class' => 'form-control']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="submit"></label>
                                <div class="col-md-10">
                                    {!! Form::button('Confirm', ['class' => 'btn btn--submit btn--dark modal__button', 'name' => 'confirm', 'type' => 'submit']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
