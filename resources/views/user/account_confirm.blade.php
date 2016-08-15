@extends('layouts.user')

@section('Digital shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<div id="page-wrapper">
    <div class="panel panel-primary TOP10">
        <div class="panel-heading">
            <div class="panel-title">Orders accounts</div>
        </div>
        <div class="panel-body" >
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-heading">
                        <div class="panel-title">Checkin accounts</div>
                    </div>
                    <div class="panel-body" >
                        {!! Form::open(['route' => 'user.account', 'method' => 'POST']) !!}
                            <div class="form-group">
                                <label class="col-md-2" for="Money">Money amount</label>
                                <div class="col-md-3">
                                    {!! Form::textarea('amount', $input['amount'], ['class' => 'form-control input-md input input--gray', 'rows' => 1, 'maxlength' => 50, 'disabled']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="submit"></label>
                                <div class="col-md-3">
                                    {!! Form::button('Back', ['class' => 'btn btn--submit btn--dark modal__button', 'name' => 'back', 'type' => 'submit']) !!}
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