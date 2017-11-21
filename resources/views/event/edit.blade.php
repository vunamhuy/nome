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
                            <div class="col-md-6">
                                <table class="table table-striped">
                                    <thead>
                                    <td>ID</td>
                                    <td>Team Name</td>
                                    <td>Result</td>
                                    <td>Competitor Name</td>
                                    </thead>
                                    <tbody>
                                    @foreach ($ratios as $ratio)
                                        <tr class="@if($ratio->status == 1) success @else active @endif" >
                                            <td>{{$ratio->id}}
                                            </td>
                                            <td>{{$ratio->event_sport->team->name}}</td>
                                            <td>
                                            @if($ratio->event_result)
                                            {{ $ratio->event_result->name }} 
                                            @endif
                                            </td>
                                            <td>{{$ratio->event_sport->competitor->name}}</td>
                                            <td>

                                                <a href="{{ url('admin/ratio/update/' . $ratio->id ) }}">
                                                    <button class="btn btn-info">Edit</button>
                                                </a> 
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class='col-sm-3'>
                                <h4>{{ $events->description or '' }}</h4>
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker'>
                                        <input type='text' class="form-control" id="mydate" name="start_date" value="{{ \Carbon\Carbon::parse($events->created_at)->format('m/d/Y H:i:s') }}" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
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

@section('script')

<script>
$(function () {
    $('#datetimepicker').datetimepicker({
        format: 'MM/DD/YYYY H:m:s',
        // defaultDate: $('#mydate').val(),
    });
});

</script>
@endsection