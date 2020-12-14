@extends('admin.layout1')

<style>
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked + .slider {
        background-color: mediumpurple;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>

@section('content')

    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-border-color "></i>
                </span> Add Product </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>

    <div class="row">

        @if($pending->count() > 0)
        <div class="col-12 grid-margin stretch-card">
            <div class="card">



                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" style="margin-bottom: 50px">Pending Orders</h4>

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th> Name</th>
                                            <th> Email</th>
                                            <th> Phone Number</th>
                                            <th> State</th>
                                            <th>City</th>
                                            <th>View more</th>
                                            <th>Delivered</th>

                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($pending as $order)
                                            <tr>
                                                <td> {{$order->orderId}}</td>
                                                <td>{{$order->fullname}}</td>
                                                <td>{{$order->email}}</td>
                                                <td>{{$order->phone}}</td>
                                                <td>{{$order->state}}</td>
                                                <td>{{$order->city}}</td>
                                                <td style=" text-align: center" ><a  href="/pending/{{$order->orderId}}" ><i style="color: blue; text-align: center"  class=" btn-icon mdi mdi-checkbox-multiple-blank"></i></a></td>
                                                <td>
                                                    <form action="/request/{{$order->orderId}}" method="POST">
                                                        @csrf

                                                        <button style="border: none; background-color: transparent"
                                                                type="submit">
                                                            <label class="switch">
                                                                <input name="request" type="checkbox">
                                                                <span  class="slider round"></span>
                                                            </label>
                                                            {{--                                                                    <input type="checkbox" name="request" class="form-check-input">--}}

                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                                {{$pending->links()}}
                            </div>

                        </div>

                    </div>


            </div>

        </div>

        @else
            <h3 class=" d-flex justify-content-center">No Pending Orders</h3>
        @endif
    </div>


@endsection
