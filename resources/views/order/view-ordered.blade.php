@extends('layouts.user')

@section('Digital shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<div id="page-wrapper">
    <div class="panel panel-primary TOP10">
        <div class="panel-heading">
            <div class="panel-title">Orders</div>
        </div>
        <div class="panel-body" >
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th class="col-sm-3">Name</th>
                            <th class="col-sm-4">Image</th>
                            <th class="col-sm-3">File</th>
                            <th class="col-sm-2">Price</th>
                        </tr>
                        </thead>
                        @foreach($order as $item)
                            @if(!empty($item->product))
                            <tr>
                                <td>{{$item->product->name}}</td>
                                <td>
                                    <div id="fh5co-board" data-columns>
                                        <div class="item">
                                            <div class="animate-box">
                                                <a href="{{ route('images', $item->file->filename) }}" class="image-popup fh5co-board-img" title="{{ $item->name}}">
                                                    <img src="{{ route('images', $item->file->filename) }}" class="img-responsive">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="/download/{{$item->id}}/{{$item->file->filename}}"> {{$item->file->filename}}</a></td>
                                <td>$ {{number_format($item->product->price,2,',','')}}</td>
                            </tr>
                            @endif
                        @endforeach
                    </table>
                    <div class="panel panel-primary TOP10">
                        <div class="panel-heading">
                            <div class="panel-title">Informations buyer</div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th class="col-sm-3">Name</th>
                                <th class="col-sm-4">Phone</th>
                                <th class="col-sm-3">Address</th>
                                <th class="col-sm-2">Email</th>
                            </tr>
                            </thead>
                            <tr>
                                <td>{{$orderInfo->name}}</td>
                                <td>
                                    {{$orderInfo->phone}}
                                </td>
                                <td>{{$orderInfo->address}}</td>
                                <td>{{$orderInfo->email}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection