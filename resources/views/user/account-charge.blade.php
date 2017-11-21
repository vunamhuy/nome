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
                        {!! Form::open(['route' => 'user_account', 'method' => 'POST']) !!}

                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                                <input id="point" type="text" value="{{ $point }}" class="form-control" name="point" disabled>
                            </div>
                            <p></p>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="text" class="form-control" name="point">
                                </div>
                            <p></p>
                            <div class="input-group">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection