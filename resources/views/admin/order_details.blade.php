@extends('admin.layout1')



@section('content')

    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-border-color "></i>
                </span>{{$orders->fullname}}'s Billing Details</h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>


    <div class="row">


        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center " style="margin-bottom: 50px">Billing Details</h3>
                    <div class="container" style="margin-right: auto; margin-left: auto">


                        <div>
                            <address>
                                <p>  <strong style="margin-right: 10px">Order ID:</strong>  {{$orders->orderId}} </p>
                                <br>
                                <p> <strong style="margin-right: 10px">Name:</strong>  {{$orders->fullname}} </p>
                                <br>
                                <p> <strong style="margin-right: 10px">Email:</strong> {{$orders->email}} </p>
                                <br>
                                <p>  <strong style="margin-right: 10px">Phone Number:</strong> {{$orders->phone}} </p>
                                <br>
                                <p>  <strong style="margin-right: 10px">State:</strong>    {{$orders->state}},Nigeria  </p>
                                <br>
                                <p> <strong style="margin-right: 10px">City: </strong> {{$orders->city}} </p>
                                <br>
                                <p> <strong style="margin-right: 10px">Address:</strong> {{$orders->address}} </p>
                                <br>

                                @if($orders->delivered == false)
                                    <p> <strong style="margin-right: 10px">Date of Order:</strong> {{$orders->created_at->format('d M,Y')}} </p>
                                @else
                                    <p> <strong style="margin-right: 10px">Date of Delivery:</strong> {{$orders->updated_at->format('d M,Y')}} </p>
                                @endif
                                <br>
                                <p> <strong style="margin-right: 10px">Services:</strong> @if($orders->services == 1) Call within 24 hours of "Date of Order"
                                    @else No service needed @endif</p>

                            </address>
                        </div>


                        <div class="confirmation_part padding_top" style="background-color: rgba(153,50,204,0.4) !important; margin-top: 100px">
                            <div class="col-lg-12" >
                                <div class="order_details_iner" style="padding: 30px 30px" >
                                    <h3>Order Details</h3>

                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>

                                            <tr>

                                                <th scope="col" colspan="2">Product</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Total</th>

                                            </tr>

                                            </thead>
                                            <tbody>
                                            @foreach($contents as $content)
                                                <tr style="border-top:20px;">
                                                    <th  colspan="2"><span>{{$content->name}}</span></th>
                                                    <th>x{{$content->quantity}}</th>
                                                    <th> <span>&#8358;{{number_format($content->price )}}</span></th>
                                                </tr>
                                            @endforeach


                                            {{--                <tr>--}}
                                            {{--                    <th colspan="3">Subtotal</th>--}}
                                            {{--                    <th> <span>&#8358;{{number_format(\Cart::getsubTotal('5f592d0e5e255') * 1000)}}</span></th>--}}
                                            {{--                </tr>--}}
                                            {{--                <tr>--}}
                                            {{--                    <th colspan="3">shipping</th>--}}
                                            {{--                    --}}{{--                                        <th><span>flat rate: &#8358;{{number_format($shippingFee)}}</span></th>--}}
                                            {{--                </tr>--}}
                                            {{--                </tbody>--}}
                                            {{--                <tfoot>--}}
                                            {{--                <tr>--}}
                                            {{--                    <th scope="col" colspan="3">Total</th>--}}
                                            {{--                    <th scope="col">Total : &#8358;{{number_format(\Cart::getTotal() * 1000 )}}</th>--}}
                                            {{--                </tr>--}}
                                            {{--                </tfoot>--}}


                                        </table>

                                        <div class="card-body">
                                            <h4 class="card-title">Extra details</h4>
                                            {{--                <p class="card-description"> Use class <code>.lead</code>--}}
                                            </p>
                                            <p class="lead"> {{$orders->extra}} </p>
                                        </div>
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
