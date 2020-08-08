@extends('admin.layout1')

@section('content')
        <div class="page-header">
            <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white mr-2">
                      <i class="mdi mdi-tag  "></i>
                    </span> Tags/Categories </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>



    <div class="row">


        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">


                    <form class="form-inline" action="/admin/tags" method="post" style="margin-bottom: 30px">
                        @csrf
                        <label class="sr-only" for="inlineFormInputName2">Tag/Category</label>
                        <input
                            type="text"
                            @error('name')
                            style="border-color: red;"
                            @enderror
                            placeholder="Tag/Category"
                            name="name" value="{{old(value("name"))}}"
                            class="form-control col-md-6 mb-2 mr-sm-4"
                            id="inlineFormInputName2"
                        >


                        @error('name')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                        <button type="submit" class="btn btn-gradient-primary mb-2">Submit</button>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>

                                <th> Tag/Category</th>
                                <th style="text-align: center"> Delete</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($tags as $tag)
                                <tr>


                                    <td> {{$tag->name}}</td>
                                    <td style="text-align: center">
                                        <form action="/tags/{{$tag->id}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button style="border: none; background-color: transparent" type="submit">
                                                <i style="color: blue" class="mdi mdi-delete"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>

                        </table>
                    </div>


                </div>
                <div class=" container ">
                    {{$tags->links()}}
                </div>
            </div>

        </div>
@endsection
