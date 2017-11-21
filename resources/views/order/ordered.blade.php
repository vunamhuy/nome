@extends('layouts.user')

@section('Digital shop', 'Page Title')

@section('nav')
    @parent
@endsection

@section('content')
<div id="page-wrapper">
    <div class="panel panel-primary top10">
        <div class="panel-heading">
            <div class="panel-title">My products odered</div>
        </div>
        <div class="panel-body" >
            This is my products odered
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
		                    <th class="col-sm-2">Address</th>
		                    <th class="col-sm-4">Date</th>
		                    <th class="col-sm-2"></th>
		                </tr>
		                </thead>
		                @foreach($ordered as $order)
		                    <tr>
		                        <td>{{$order->order->name}}</td>
		                        <td>{{$order->order->phone}}</td>
		                        <td>{{$order->order->email}}</td>
		                        <td>{{$order->order->address}}</td>
		                        <td><a href="/ordered/{{$order->order_id}}"> {{$order->created_at}}</a></td>
		                        <td><a href="/ordered/{{$order->order_id}}"><i class="fa fa-search-plus"></i></a></td>
		                    </tr>
		                @endforeach
		            </table>
		        </div>
		    </div>
		</div>
	</div>	
</div>
@endsection