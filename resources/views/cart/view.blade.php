@extends('layouts.master')

@section('Digital shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<div id="page-wrapper">
    <div class="panel panel-default top10">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-6">
                    Order
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th></th>
                            <th class="text-center"></th>
                            <th class="text-center">Total</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{ route('images', $item->product->file->filename) }}" style="width: 100px; height: 72px;"> </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="#">{{$item->product->name}}</a></h4>
                                        </div>
                                    </div></td>
                                <td class="col-sm-1 col-md-1" style="text-align: center">
                                </td>
                                <td class="col-sm-1 col-md-1 text-center"></td>
                                <td class="col-sm-1 col-md-1 text-center"><strong>${{$item->product->price}}</strong></td>
                                <td class="col-sm-1 col-md-1">
                                    <a href="/removeItem/{{$item->id}}"> <button type="button" class="btn btn-danger">
                                            <span class="fa fa-remove"></span> Remove
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td><h3>Total</h3></td>
                            <td class="text-right"><h3><strong>${{$total}}</strong></h3></td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                                <a href="/"> <button type="button" class="btn btn-default">
                                        <span class="fa fa-shopping-cart"></span> Continue Shopping
                                    </button>
                                </a></td>
                            <td class="col-md-2">
                                  <button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#checkoutForm">
                                  Đặt mua
                                  </button>
                                <!-- <form action="/checkout" method="POST">
                                    {!! csrf_field() !!}
                                    <script
                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                            data-key="pk_test_EiVqBgJNGGkL76aP70wlCwJW"
                                            data-amount="{{$total}}"
                                            data-name="CODETutorial.IO"
                                            data-description="Products"
                                            data-image="/128x128.png"
                                            data-locale="auto">
                                    </script>
                                </form> -->
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <!-- Modal -->
                      <div class="modal fade" id="checkoutForm" role="dialog">
                        <div class="modal-dialog modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <div class="panel-title "> Đặt hàng </div>
                            </div>
                            <div class="panel-body">
                            <div class="col-md-3">
                                <div class="row"> 
                                    <label class="panel-heading">
                                        <span class="label label-info glyphicon glyphicon-shopping-cart">New</span> 
                                        Suggest a product
                                    </label>
                                </div>
                                <div class="row">
                                 @foreach($items as $item)
                                    <div class="panel-heading">
                                        <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{ route('images', $item->product->file->filename) }}" style="width: 100px; height: 72px;"> </a>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-12 col-xs-12">
                                            <h5>{{$item->product->name}}</h5>
                                        </div>
                                        <div class="col-md-12 col-xs-12 price">
                                            <label>${{$item->product->price}}</label>
                                        </div>
                                    </div>
                                 @endforeach
                                </div>
                            </div>
                            <div class="col-md-9">
                            {!! Form::open(array( 'url' => ['/checkout'] , 'class' => 'form-horizontal')) !!}
                              <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="name">Name</label>
                                    <div class="col-md-9">
                                        <input id="name" name="name" type="text" placeholder="name" class="form-control input-md" required="" value="">

                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="phone">Phone</label>
                                    <div class="col-md-9">
                                        <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required="" value="">
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="email">Email</label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="address">Address</label>
                                    <div class="col-md-9">
                                        <input id="address" name="address" type="text" placeholder="address" class="form-control input-md" required="" value="">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="address">Comments</label>
                                    <div class="col-md-9">
                                        <input id="comment" name="comment" type="text" placeholder="comments" class="form-control input-md" required="" value="">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="submit"></label>
                                    <div class="col-md-9">
                                        <button id="submit" name="submit" class="btn btn-primary">Order</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                            </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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