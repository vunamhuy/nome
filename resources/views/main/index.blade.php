@extends('layouts.master')

@section('Digital shop', 'Page Title')

@section('nav')
    @parent
@endsection

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div id="fh5co-board" data-columns>
                @foreach ($products as $product)
                <div class="item">
                    <div class="animate-box">
                        <a href="{{ route('images', $product->file->filename) }}" class="image-popup fh5co-board-img" title="{{ $product->name}}"><img src="{{ route('images', $product->file->filename) }}" class="img-responsive"></a>
                    </div>
                    <div class="caption">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>
                                <a href="/{{ $product->slug()}}.{{$product->id}}">
                                {{$product->name}}
                                </a>
                                </h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 price">
                                <h3>
                                    <label>${{$product->price}}</label></h3>
                            </div>
                        </div>
                        <div>{{ String::words($product->description, 20, ' ... ') }}</div>
                        <div class="row top10">
                            <div class="col-md-6 col-md-offset-3">
                                <a href="/addProduct/{{$product->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>
</div>
@endsection