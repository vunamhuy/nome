@extends('layouts.master')

@section('Digital shop', 'Page Title')

@section('nav')
    @parent
@endsection

@section('content')
<div id="page-wrapper" ng-app="depositApp" ng-controller="depositController">
    <div class="row">
        <div class="top10">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="#">
                        <span class="glyphicon glyphicon-signal"></span>
                    </a>
                    Livescores
                </div>
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                    <td colspan="1" align="center">Date</td>
                    <td colspan="2" align="center">Games</td>
                    <td colspan="3" align="center">Ratio</td>
                    </thead>
                    <tbody>
                    @foreach ($events_sport as $event)
                        @if(!empty($event->team->id) && !empty($event->competitor->id))
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
                            @if(count($event->ratio) > 0)
                                @foreach($event->ratio as $ratio)
                                    <td>
                                    <a data-toggle="modal" ng-click="deposit({{$ratio->id}})" data-target="#deposit" class="btn btn-info">
                                        {{$ratio->ratio}}
                                    </a>
                                    </td>
                                @endforeach
                            @else
                                <td>
                                    <a data-toggle="modal" data-target="#deposit" class="btn btn-info">
                                        0
                                    </a>
                                </td>
                                <td>
                                    <a data-toggle="modal" data-target="#deposit" class="btn btn-info">
                                        0
                                    </a>
                                </td>
                                <td>
                                    <a data-toggle="modal" data-target="#deposit" class="btn btn-info">
                                        0
                                    </a>
                                </td>
                            @endif
                            <td>
                                @if($event->league->id)
                                {{$event->league->name}}
                                @endif
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                <!-- Deposit Modal -->
                <div class="modal fade" id="deposit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="POST" name="depositForm" role="form" ng-submit="saveDeposit()">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Deposit</h4>
                                </div>
                                <div class="panel panel-body">
                                    <div class="col-xs-12"  ng-model="form">
                                        <div ng-model="form" class="success">
                                            <table class="table">
                                                <tr>
                                                    <td>
                                                       @{{form.homeTeam}}
                                                    </td>
                                                    <td>
                                                        @{{form.result.name}}
                                                    </td>
                                                    <td>
                                                        @{{form.awayTeam}}
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <input ng-model="form.scores" type="text" placeholder="Scores" name="scores" class="form-control" required />
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" ng-disabled="depositForm.$invalid" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Notice Modal -->
                <div class="modal fade" id="messageDeposit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title panel" id="myModalLabel"><span class="glyphicon glyphicon-signal"></span> Message</h4>
                            </div>
                            <div class="panel panel-body">
                                <div class="col-xs-12 col-sm-6 col-md-6"  ng-model="form">
                                    <div class="col-md-12 messagesDeposit">
                                        <!-- content messgae -->
                                    </div>
                                </div>
                            </div>
                        </div>
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

    $scope.saveDeposit = function(){
        var data = {
            ratio_id: $scope.form.ratio_id,
            scores: $scope.form.scores
        };
        $(".modal").modal("hide");
        $http({
        method  : 'POST',
        url     : 'livescores/deposit',
        data    : data, //forms user object
        })
        .success(function(data) {
            console.log(data);
            $('.messagesDeposit').html(data.message);
            $("#messageDeposit").modal("show");
        });
    }
});
</script>
@endsection