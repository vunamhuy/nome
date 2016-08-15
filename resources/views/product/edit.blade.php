
@extends('layouts.master')

@section('New Product', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<div id="page-wrapper">
    <div class="panel panel-default top10">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-6">
                    New Product
                </div>
            </div>
        </div>
        <div class="panel-body">
        {!! Form::model($products, array( 'route' => ['products.update', 'id' => $products->id] , 'files' => true, 'class' => 'form-horizontal')) !!}
            {!! Form::hidden('id') !!}
                <fieldset>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Name</label>
                        <div class="col-md-9">
                            <input id="name" name="name" type="text" placeholder="Product name" class="form-control input-md" required="" value="{{$products->name}}">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textarea">Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" class="textarea" name="description">{{$products->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textarea">Content</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="editor" class="textarea" name="content">{{$products->content}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="price">Price</label>
                        <div class="col-md-9">
                            <input id="price" name="price" type="text" placeholder="Product price" class="form-control input-md" required="" value="{{$products->price}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="price">Keywords</label>
                        <div class="col-md-9">
                            <input id="keywords" name="keywords" type="text" placeholder="Product keywords" class="form-control input-md" required="" value="{{$products->keywords}}">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="quantity">Quantity</label>
                        <div class="col-md-9">
                            <input id="quantity" name="quantity" type="text" placeholder="Product quantity" class="form-control input-md" required="" value="{{$products->quantity}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="imageurl">Image URL</label>
                        <div class="col-md-9">
                            <input id="imageurl" name="imageurl" type="text" placeholder="Image URL" class="form-control input-md" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="file">File</label>
                        <div class="col-md-9">
                            <input id="file" name="file" class="input-file" type="file">
                            <div class="col-sm-3 panel-body">
                                <div class="row"> 
                                {!! HTML::image(route('images', isset($products->file->filename)?$products->file->filename:null ), $products->name, ['class' => 'img-responsive']) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="submit"></label>
                        <div class="col-md-9">
                            <button id="submit" name="submit" class="btn btn-primary">Insert</button>
                        </div>
                    </div>

                </fieldset>

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
