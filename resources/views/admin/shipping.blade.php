@extends('admin.layout1')



@section('content')

    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-border-color "></i>
                </span> Add Shipping Cost </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>

    <div class="row">


        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Shipping Cost</h4>

                    <form class="form-inline" method="post" action="/shipping">
                        @csrf

                        <input required
                               type="text"
                               class="form-control col-xm-7 mb-2 mr-sm-2"
                               name="state" id="inlineFormInputName2"
                               placeholder="State">

                        <input required
                               type="number"
                               class="form-control col-xm-4 mb-2 mr-sm-2"
                               name="fee" id="inlineFormInputName2"
                               placeholder="Shipping Fee">

                        <button type="submit" class="btn btn-gradient-primary mb-2">Submit</button>
                    </form>

                </div>

                @if($fees->count() > 0)
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Shipping List</h4>

                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>States</th>
                                            <th> Fees</th>
                                            <th> Delete</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($fees as $fee)
                                            <tr>
                                                <td> {{$fee->state}}</td>
                                                <td>&#8358;{{number_format($fee->fee)}}</td>
                                                <td>
                                                    <form action="/shippingfee/{{$fee->id}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button style="border: none; background-color: transparent"
                                                                type="submit">
                                                            <i style="color: blue" class="mdi mdi-delete"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                                {{$fees->links()}}
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>


    </div>



@endsection
