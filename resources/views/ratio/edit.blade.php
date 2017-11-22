@extends('layouts.admin')

@section('Admin shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<div id="page-wrapper">
    <div class="top10">
        <div class="row top10">
             <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">Update</div>
                </div>
                <div class="panel-body" >
                    <!--message-->
                    @if(Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    @include('includes.messages')
                    {!! Form::open(array('url' => '/admin/ratio/update/'.$ratio->id, 'class' => 'form-horizontal', 'files' => true)) !!}
                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">
                                <div class="col-md-12">
                                <table class="table">
                                    <tr>
                                        <td>
                                            {{ $ratio->event_sport->team->name }}
                                        </td>
                                        <td>
                                            @if($ratio->event_result)
                                            {{ $ratio->event_result->name }}
                                            @endif
                                        </td>
                                        <td>
                                            {{ $ratio->event_sport->competitor->name }}
                                        </td>
                                        <td>
                                            {!! Form::select('status', $statuses, $ratio->status, array('class' => 'form-control', 'disabled' => $ratio->status == 1 ? true : false)) !!}
                                        </td>
                                    </tr>
                                </table>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-1 control-label" for="submit"></label>
                                <div class="col-md-3">
                                    <button id="submit" name="submit" class="btn btn-primary">update</button>
                                </div>
                            </div>
                            @if($ratio->status == 1)
                            <div class="form-group">
                                <label class="col-md-1 control-label" for="submit"></label>
                                <div class="col-md-3">
                                    <button id="submit" name="updateScores" class="btn btn-primary">Update scores</button>
                                </div>
                            </div>
                            @endif
                        </fieldset>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert-success").alert('close');
    });
</script>
@endsection