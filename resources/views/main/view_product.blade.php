@extends('layouts.master')

@section('Digital shop', 'Page Title')

@section('nav')
    @parent
@endsection

@section('content')
<div id="page-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div id="fh5co-board">
                <div class="col-md-6">
                    <div class="item">
                        <div class="animate-box">
                            <a href="{{ route('images', $product->file->filename) }}" class="image-popup fh5co-board-img" title="{{ $product->name}}"><img src="{{ route('images', $product->file->filename) }}" class="img-responsive"></a>
                        </div>
                        <div class="caption">
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <h3>{{$product->name}}</h3>
                                </div>
                                <div class="col-md-6 col-xs-6 price">
                                    <h3>
                                        <label>${{$product->price}}</label></h3>
                                </div>
                            </div>
                            <div class="col-md-12">{!!$product->description!!}}</div>
                            <div class="col-md-12">{!!$product->content!!}</div>
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="/addProduct/{{$product->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                     <div class="row">
                        <div class="col-md-12">
                            <div id="fh5co-board">
                                @foreach ($related_product as $product)
                                <div class="item">
                                    <div class="animate-box">
                                        <a href="{{ route('images', $product->file->filename) }}" class="image-popup fh5co-board-img" title="{{ $product->name}}"><img src="{{ route('images', $product->file->filename) }}" class="img-responsive"></a>
                                    </div>
                                    <div class="caption">
                                        <div class="row">
                                            <div class="col-md-12 col-xs-12">
                                                <a href="/{{ $product->slug()}}.{{$product->id}}">
                                                    <h3>{{$product->name}}</h3>
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-xs-6 price">
                                                <button class="btn btn-info col-md-12">
                                                    <h3>
                                                        <label>${{$product->price}}</label>
                                                    </h3>
                                                </button>
                                            </div>
                                            <div class="col-md-6 col-xs-6 price">
                                                <button class="btn btn-success col-md-12 ">
                                                    <a href="/addProduct/{{$product->id}}" class="btn btn-success btn-product"><span class="fa fa-shopping-cart"></span> Buy</a>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection