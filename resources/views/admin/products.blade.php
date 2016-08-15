@extends('layouts.user')

@section('Admin shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<div id="page-wrapper">
	<div class="panel panel-default">
	  	<div class="panel-heading">
		  	<div class="row">
		        <div class="col-md-6">
		            <a href="{{route('products.create')}}"><button class="btn btn-success">New Product</button></a>
		        </div>
		    </div>
	  	</div>
	  	<div class="panel-body">
		    <div class="row">
		        <div class="col-md-12">
		        	@include('includes.messages')
		            <table class="table table-striped">
		                <thead>
		                <td class="col-sm-2">STT</td>
		                <td class="col-sm-2">Name</td>
		                <td class="col-sm-2">Price</td>
		                <td class="col-sm-4">File</td>
		                <td class="col-sm-2"></td>
		                </thead>
		                <tbody>
		                @foreach ($products as $key => $product)
		                    <tr data-link='{{ action('ProductController@edit', $product->id) }}'>
		                        <td>{{$key+1}}</td>
		                        <td>{{$product->name}}</td>
		                        <td>{{$product->price}}$</td>
		                        <td>
		                        	<div id="fh5co-board" data-columns>
		                        		<div class="item">
			                        		<div class="animate-box">
				                        	<a href="{{ route('images', $product->file->filename) }}" class="image-popup fh5co-board-img" title="{{ $product->name}}"><img src="{{ route('images', $product->file->filename) }}" class="img-responsive"></a>
				                    		</div>
				                    	</div>
				                    </div>
                    			</td>
		                        <td><a href="{{ route('products.delete', $product->id) }}"><button class="btn btn-danger">Del</button></a> </td>
		                    </tr>
		                @endforeach
		                </tbody>
		            </table>
		            @include('elements.pagination', ['paginator' => $products->appends(Request::all())])
		        </div>
		    </div>
    	</div>
	</div>
</div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('.table tbody').on('click', 'tr', function () {
                window.location = $(this).data('link');
            } );
        });
    </script>
@endsection