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
                    <table class="table table-striped" width="100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Total</th>
                            <th></th>
                        </tr>
                        </thead>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{$order->name}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->email}}</td>
                                <td><a href="order/{{$order->id}}"> {{$order->created_at}}</a></td>
                                <td><a href=""> {{ sprintf('%s VNĐ',number_format($order->total_paid)) }}</a></td>
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