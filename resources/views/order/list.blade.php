@extends('layouts.admin')

@section('Digital shop', 'Page Title')

@section('nav')
    @parent
@endsection

@section('content')
<div id="page-wrapper">
    <div class="panel panel-primary top10">
        <div class="panel-heading">
            <div class="panel-title">Orders(Đơn hàng)</div>
        </div>
        <div class="panel-body" >
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="col-sm-2">Name</th>
                            <th class="col-sm-2">Phone</th>
                            <th class="col-sm-2">Email</th>
                            <th class="col-sm-4">Date</th>
                            <th class="col-sm-2"></th>
                        </tr>
                        </thead>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->name}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->email}}</td>
                                <td><a href="order/{{$order->id}}"> {{$order->created_at}}</a></td>
                                <td><a href="order/{{$order->id}}"><i class="fa fa-search-plus"></i></a></td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection