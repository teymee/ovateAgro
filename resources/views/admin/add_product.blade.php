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

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <form class="forms-sample" method="post" action="/product" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label for="exampleInputName1">Name *</label>
                            <input  value="{{old(value('name'))}}" required name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Name"
                                    style="@error('name')
                                        border-color:red;
                                    @enderror"
                            >
                            @error('name')
                            <p style="color:red"><small><strong>{{$message}}</strong></small></p>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleTextarea1">Description</label>
                            <textarea name="description" class="form-control" id="exampleTextarea1" rows="4">{{old(value('description'))}}</textarea>
                            @error('description')
                            <p style="color:red"><small><strong>{{$message}}</strong></small></p>
                            @enderror
                        </div>



{{--                        <div class="form-group">--}}
{{--                            <label for="exampleFormControlSelect1">Category *</label>--}}
{{--                            <select name="cat_id"  class="form-control form-control-lg" id="exampleFormControlSelect1"--}}
{{--                                    style="@error('cat_id')--}}
{{--                                        border-color:red;--}}
{{--                                    @enderror">--}}
{{--                                @foreach($category as $categories)--}}
{{--                                    <option value="{{$categories->id}}">{{$categories->name}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                            @error('cat_id')--}}
{{--                            <p style="color:red"><small><strong>{{$message}}</strong></small></p>--}}
{{--                            @enderror--}}
{{--                        </div>--}}


                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Quantity *</label>
                            <select name="quantity"  class="form-control form-control-lg" id="exampleFormControlSelect1"
                                    style="@error('cat_id')
                                        border-color:red;
                                    @enderror">
                                <option value="1"> In Stock</option>
                                <option value="0"> Low Stock</option>

                            </select>
                            @error('quantity')
                            <p style="color:red"><small><strong>{{$message}}</strong></small></p>
                            @enderror
                        </div>

                        {{--                                <div class="form-group">--}}
                        {{--                                    <label for="exampleInputEmail3">Quantity *</label>--}}
                        {{--                                    <input  value="{{old(value('quantity'))}}" required  name="quantity" type="number" min="0" class="form-control" id="exampleInputEmail3" placeholder="Quantity avaliable in store"--}}
                        {{--                                           style="@error('quantity')--}}
                        {{--                                               border-color:red;--}}
                        {{--                                           @enderror">--}}
                        {{--                                    @error('quantity')--}}
                        {{--                                    <p style="color:red"><small><strong>{{$message}}</strong></small></p>--}}
                        {{--                                    @enderror--}}
                        {{--                                </div>--}}



                        <div class="form-group">
                            <label for="exampleInputEmail3">Price *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-gradient-primary text-white">N</span>
                                </div>
                                <input value="{{old(value('price'))}}" required  name="price" type="text" class="form-control"
                                       style="@error('price')
                                           border-color:red;
                                       @enderror">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            @error('price')
                            <p style="color:red"><small><strong>{{$message}}</strong></small></p>
                            @enderror
                        </div>



                        <div class="form-group">
                            <label>File upload</label>
                            <input required  type="file" name="images" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input name="images" type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                <span class="input-group-append">
                                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                                         </span>
                            </div>
                            @error('images')
                            <p style="color:red"><small><strong>{{$message}}</strong></small></p>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" class=" col-12 btn btn-gradient-primary mr-2">Submit</button>

                    </form>

                </div>
            </div>
        </div>

    </div>



@endsection
