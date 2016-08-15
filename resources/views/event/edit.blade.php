@extends('layouts.admin')

@section('Admin shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<div id="page-wrapper">
    <div class="top10">
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">Edit</div>
                </div>
                <div class="panel-body" >
                    @include('includes.messages')
                    <div class="col-md-12">
                        {!! Form::open(['route' => ['event.update', $events->id], 'method' => 'POST']) !!}
                            <div class="form-group">
                                <label class="col-md-2" for="Money">Date start</label>
                                <div class="col-md-3">
                                    <input type="date" name="start_date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="submit"></label>
                                <div class="col-md-3">
                                    {!! Form::button('Update', ['class' => 'btn btn--submit btn-default modal__button', 'name' => 'update', 'type' => 'submit']) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection