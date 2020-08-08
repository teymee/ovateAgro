@extends('admin.layout1')

@section('content')
        <div class="page-header">
            <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white mr-2">
                      <i class="mdi mdi-account-check"></i>
                    </span> Editors </h3>
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


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>  </th>
                                <th> Name </th>
                                <th> Email  </th>
                                <th> Role </th>
                                <th> Joined </th>
                                <th style="text-align: center"> Downgrade to User </th>

                                <th style="text-align: center"> Delete </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($editors as $user)
                                <tr>

                                    <td class="py-1">

                                        <img src="{{asset('/storage/'.$user->avatar)}}" alt="image" />
                                    </td>
                                    <td> {{$user->name}} </td>
                                    <td style="font-weight: bold">
                                        {{$user->email}}
                                    </td>
                                    <td>
                                        {{$user->role[0]->name}}
                                    </td>
                                    <td> {{$user->created_at->format('d M, Y')}}</td>
                                    {{--                                <td style="text-align: center"><a href="/admin/{{$user->id}}/edit"> <i class="mdi mdi-upload "></i></a> </td>--}}
                                    <td style="text-align: center">
                                        <form action="/editors/{{$user->id}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button style="border: none; background-color: transparent" type="submit"><i style="color: blue" class="mdi mdi-upload" ></i></button>
                                        </form>
                                    </td>
                                    <td style="text-align: center">
                                        <form action="/editors/{{$user->id}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button style="border: none; background-color: transparent" type="submit"><i style="color: blue" class="mdi mdi-delete" ></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach



                            </tbody>

                        </table>
                    </div>




                </div>
                <div class=" container ">
                    {{--                    {{$editors->links()}}--}}
                </div>
            </div>



@endsection
