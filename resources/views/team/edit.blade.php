@extends('layouts.admin')

@section('Admin shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<div id="page-wrapper">
    <div class="top10">
        <div class="row">
            <div class="col-md-6">
                <a href="/admin/team/new"><button class="btn btn-success">New team</button></a>
            </div>
        </div>
        <div class="row">
             <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">Edit</div>
                </div>
                <div class="panel-body" >
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    {!! Form::model($teams, array( 'url' => ['admin/team/update' , $teams->id], 'files' => true, 'class' => 'form-horizontal')) !!}
                        {!! Form::hidden('id') !!}
                        {!! csrf_field() !!}
                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-1 control-label" for="name">Name</label>
                                <div class="col-md-4">
                                    <input id="name" name="name" type="text" placeholder="Team name" class="form-control input-md" required="" value="{{$teams->name}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-1 control-label" for="name">League</label>
                                <div class="col-md-3">
                                    {!! Form::select('leagueID', $leagues, null, array('class' => 'form-control')) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-1 control-label" for="file">File</label>
                                <div class="col-md-3">
                                    <input id="file" name="file" class="input-file" type="file">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-1 control-label" for="submit"></label>
                                <div class="col-md-3">
                                    <button id="submit" name="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>

                        </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection