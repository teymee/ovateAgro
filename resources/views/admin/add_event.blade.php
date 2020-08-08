@extends('admin.layout1')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-border-color "></i>
                </span> Add Event </h3>
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

                    <form class="forms-sample" method="POST" action="/event" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="exampleInputName1"
                                placeholder="Name"
                                name="name"
                                value="{{old(value("name"))}}"
                                @error('name')
                                style="border-color: red;"
                                @enderror>

                            @error('name')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Date</label>
                            <input
                                type="date"
                                class="form-control"
                                id="exampleInputName1"
                                name="date"
                                value="{{old(value("date"))}}"
                                @error('date')
                                style="border-color: red;"
                                @enderror>

                            @error('date')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="images" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" name="images" class="form-control file-upload-info" disabled
                                       placeholder="Upload Image">
                                <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleTextarea1">Details</label>
                            <textarea
                                class="form-control"
                                id="summary-ckeditor"
                                rows="10" name="body"
                                @error('body')
                                style="border-color: red;"
                                @enderror>{{old(value('body'))}}</textarea>

                            @error('body')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>




                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
