@extends('admin.layout1')

@section('content')
    <div class="page-header">
        <h3 class="page-name">
                <span class="page-name-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-account-convert "></i>
                </span> Profile </h3>
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

                    <div class=" d-flex justify-content-center">
                        <img src="{{asset('/storage/'.auth()->user()->avatar)}}" alt="profile" class="rounded-circle" width="300" height="250">
                    </div>

                    <form class="forms-sample" method="POST" action="/profile/{{auth()->user()->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="exampleInputName1"
                                name="name"
                                value="{{auth()->user()->name}}"
                                @error('name')
                                style="border-color: red;"
                                @enderror
                           >

                            @error('name')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Email</label>
                            <input
                                type="email"
                                class="form-control"
                                id="exampleInputName1"
                                name="email"
                                value="{{auth()->user()->email}}"
                                @error('email')
                                style="border-color: red;"
                                @enderror
                            >

                            @error('email')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleTextarea1">About</label>
                            <textarea
                                class="form-control" id="exampleTextarea1"
                                name="about" rows="4"
                                @error('email')
                                style="border-color: red;"
                                @enderror>{{auth()->user()->about}}</textarea>

                            @error('about')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label>File upload</label>
                            <input type="file" name="avatar" class="file-upload-default">
                            <div class="input-group col-xs-12">
                                <input type="text" name="avatar" class="form-control file-upload-info" disabled
                                       placeholder="Upload Image">
                                <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                          </span>
                            </div>
                        </div>


                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
