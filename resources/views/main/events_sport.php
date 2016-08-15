@extends('layouts.master')

@section('Digital shop', 'Page Title')

@section('nav')
    @parent
@endsection

@section('content')
<div id="page-wrapper" ng-app="depositApp" ng-controller="depositController">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <td colspan="1" align="center">Date</td>
                <td colspan="2" align="center">Games</td>
                <td colspan="3" align="center">Ratio</td>
                </thead>
                <tbody>
                @foreach ($events_sport as $event)
                    <tr>
                        <td>
                            {{$event->update_at}}
                        </td>
                        <td>
                            {{$event->team->name}}
                        </td>
                        <td>
                            {{$event->competitor->name}}
                        </td>
                        @foreach($event->ratio as $ratio)
                            <td>
                            <a data-toggle="modal" ng-click="deposit({{$ratio->id}})" data-target="#deposit" class="btn btn-info">
                                {{$ratio->ratio}}
                            </a>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!-- Deposit Modal -->
            <div class="modal fade" id="deposit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form method="POST" name="addItem" role="form" ng-submit="saveDeposit()">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Deposit</h4>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6"  ng-model="form">
                                        <strong ng-model="form.homeTeam"></strong>
                                        <div class="form-group">
                                            <input ng-model="form.homeTeam" type="text" placeholder="Name" name="title" class="form-control" required />
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <strong>Description : </strong>
                                        <div class="form-group" >
                                            <textarea ng-model="form.awayTeam" class="form-control" required>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" ng-disabled="addItem.$invalid" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('angular_script')
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script>
var app = angular.module('depositApp', []);
app.controller('depositController', function($scope, $http) {
    $scope.deposit = function(id){
        $http.get('livescores/ratio/'+id).then(function(data) {
        console.log(data.data);
        $scope.form = data.data;
    });
    }
});
</script>
@endsection