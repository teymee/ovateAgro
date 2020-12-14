@extends('admin.layout1')



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

@if($products->count() > 0)
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th> Quantity</th>
                            <th>Price</th>
                            <th>Featured</th>
                            <th>Edit</th>
                            <th> Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td> {{$product->name}}</td>
                                @if($product->quantity == true)
                                    <td style="color: green">In Stock</td>
                                @else
                                    <td style="color: red">Low Stock</td>
                                @endif
                                <td>{{$product->price}}</td>
                                <td>0</td>
                                <td><a href="/products/{{$product->id}}/edit"> <i class="mdi mdi-border-color "></i></a> </td>
                                <td>
                                    <form action="/product/{{$product->id}}" method="POST">
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

                {{$products->links()}}
            </div>
        </div>
    </div>
@else
    <h3> No Products Yet</h3>
@endif

@endsection
