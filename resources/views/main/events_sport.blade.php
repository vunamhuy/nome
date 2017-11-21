@extends('layouts.livescore')

@section('Digital shop', 'Page Title')

@section('nav')
    @parent
@endsection

@section('content')
<div id="page-wrapper" ng-app="depositApp" ng-controller="depositController">
    <div class="row">
        <div class="top10">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a href="#">
                            <span class="glyphicon glyphicon-signal"></span>
                        </a>
                        <span id="points">{{ $scores or 0 }}</span> points

                        <span class="timer pull-right"></span>
                    </div>
                </div>
                <table width="100%" class="table table-striped table-bordered table-hover">
                    <tbody>
                        <tr align="center" class="th-top">
                            <th width="15%" class="line-top wrap icon-date">Ngày/giờ</th>
                            <th width="30%" class="line-top wrap icon-match">Trận đấu</th>
                            <th width="15%" class="line-top wrap icon-home">Chủ</th>
                            <th width="15%" class="line-top wrap icon-ratio">Hoà</th>
                            <th width="15%" class="line-top wrap icon-away">Khách</th>
                            <th width="10%" class="line-top wrap icon-view">Chi tiết</th>
                        </tr>
                        @if ($eventByLeague)
                            <?php $count = 1; ?>
                            @foreach ($eventByLeague as $league)
                                    @if (count($league->events) > 0)
                                    <tr align="center">
                                        <th colspan="6">
                                            <a href="#"  id="section{{ $count }}" class="league-title league-icon">
                                            {{ $league->name }}
                                            </a>
                                        </th>
                                    </tr>
                                    @endif
                                    @if ($league->events)
                                        @foreach ($league->events as $events_league)
                                            <tr align="center" class="line">
                                                <td width="15%" title="Giờ Việt Nam"  class="date_event">
                                                    {{ \Carbon\Carbon::parse($events_league->created_at)->format('d/m/Y H:i:s') }}
                                                </td>
                                                <td width="30%">{{ $events_league->team->name or null }} - {{ $events_league->competitor->name or null }}</div>
                                                </td>
                                                @if (count($events_league->ratio) > 0)
                                                    @foreach($events_league->ratio as $ratio)
                                                        <td width="15%">
                                                        <a style="cursor: pointer;" data-toggle="modal" ng-click="deposit({{$ratio->id}})" class="ratio_point">{{$ratio->ratio}}</a></td>
                                                    @endforeach
                                                @else
                                                    <td width="15%"><a style="cursor: pointer;" class="ratio_point">0</a></td>
                                                    <td width="15%">
                                                    <a style="cursor: pointer;" class="ratio_point">0</a></td>
                                                    <td width="15%">
                                                    <a style="cursor: pointer;" class="ratio_point">0</a></td>
                                                @endif
                                                    <td width="10%" style="overflow-y: hidden;"><a href="#" class="glyphicon glyphicon-play"></a></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    <?php $count += 1; ?>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
               <!--  <table class="table table-striped">
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
                </table> -->
                <!-- Deposit Modal -->
                <div class="modal fade depoditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="POST" name="depositForm" role="form" ng-submit="saveDeposit()">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title " id="myModalLabel"> <span class="glyphicon glyphicon-info-sign"></span> Deposit (Dự đoán)</h4>
                                </div>
                                <div class="panel panel-body">
                                    <div class="col-xs-12"  ng-model="form">
                                        <div ng-model="form" class="success">
                                            <table class="table">
                                                <tr>
                                                    <th colspan="4">
                                                        <strong>Dự đoán kết quả trận đấu</strong>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        Đội
                                                    </td>
                                                    <td>
                                                        Kết quả
                                                    </td>
                                                    <td>
                                                        Đội
                                                    </td>
                                                    <td>
                                                        Tỉ lệ
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                       @{{form.homeTeam}}
                                                    </td>
                                                    <td>
                                                        @{{ form.result.name }}
                                                    </td>
                                                    <td>
                                                        @{{form.awayTeam}}
                                                    </td>
                                                    <td>
                                                        @{{ form.ratio }}
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <input ng-model="form.scores" type="text" placeholder="Scores" name="scores" class="form-control" required />
                                            <input type="hidden" name="event_id" value="@{{ form.event_id }}">
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-plus-sign"></span> Close</button>
                                            <button type="submit" ng-disabled="depositForm.$invalid" class="btn btn-success icon-submit">Submit</button>
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
                        <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title panel" id="myModalLabel">
                                <span class="glyphicon glyphicon-envelope"></span>
                                Message (Thông báo)
                                </h4>
                            </div>
                            <div class="modal-body alertStatus">
                                <div class="col-md-12 messagesDeposit">
                                    <!-- content messgae -->
                                </div>
                            </div>
                            <div class="modal-footer">
                              <span class="btn btn-default glyphicon glyphicon-off" data-dismiss="modal">Close</span>
                              <a class="btn btn-success glyphicon glyphicon-plus-sign" href="{{ route('user_charge') }}">Get Points</a>
                              <!-- <a class="btn btn-success">Get Points</a> -->
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
            // console.log(data.data);
            if (!data.data.error) {
                $('.depoditModal').modal('show');
                $scope.form = data.data;
                console.log(data.data);
            } else {
                window.location.href = 'login';
            }
        });
    }

    $scope.saveDeposit = function(){
        
        // console.log(data);
        $(".modal").modal("hide");
        
        $http({
                method  : 'GET',
                url     : 'livescores/deposit',
                params    : {
                    ratio_id: $scope.form.ratio_id,
                    scores: $scope.form.scores,
                    event_id: $scope.form.event_id
                }
            })
            .success(function(data) {
                $('.messagesDeposit').html(data.message);
                console.log(data);
                // $('#points').html(data.scores);
                // // $('#points').fadeOut(100, function(){
                //     setTimeout(function () {
                //         $(this).effect("shake", {
                //             times: 2
                //         }, 200);
                //     }, 1500);
                    // $(this).css('color', 'green');
                    // $(this).css('transition', 'color .6s ease-out').fadeIn(300, function () {
                    //     $(this).css('color', 'black');
                    //     $(this).css('transition', 'color .6s ease-out');
                    // });
                // });
                $("#messageDeposit").modal("show");
            })
            .error(function (e) {
                console.log(e);
            });
    }
});

function clock() {
    setInterval(function() {
        var d = new Date();
        var m = d.getMinutes();
        var s = d.getSeconds();
        var h = d.getHours();
        if (h < 10) {
            h = "0" + h;
        }
         if (m < 10) {
            m = "0" + m;
        }
         if (s < 10) {
            s = "0" + s;
        }

        var time = h+ ":" + m + ":" + s;
        $('.timer').html("Time(Giờ):" + time);
    }, 1000);
}
clock();
</script>
@endsection