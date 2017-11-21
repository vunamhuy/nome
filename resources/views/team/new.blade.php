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
                <a href="/admin/team/create"><button class="btn btn-success">New team</button></a>
            </div>
        </div>
        <div class="row top10">
             <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">Edit</div>
                </div>
                <div class="panel-body" >
                    <!-- <div class="bs-example">
                        <h2>Type your favorite car name</h2>
                        <input type="text" class="typeahead tt-query" autocomplete="off" spellcheck="false">
                    </div> -->
                    @include('includes.messages')
                    {!! Form::open(array('url' => '/admin/team/create', 'class' => 'form-horizontal', 'files' => true)) !!}
                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-1 control-label" for="name">Name</label>
                                <div class="col-md-4">
                                    <input id="name" name="name" type="text" placeholder="Team name" class="form-control input-md" required="" value="">
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
                                    <button id="submit" name="submit" class="btn btn-primary">Add new</button>
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
<!-- @section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.9.3/typeahead.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('input.typeahead').typeahead({
    name: 'accounts',
    local: ['Audi', 'BMW', 'Bugatti', 'Ferrari' ]
  });
});  
</script>
@endsection -->