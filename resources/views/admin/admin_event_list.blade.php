@extends('admin.layout1')

@section('content')
        <div class="page-header">
            <h3 class="page-title">
                    <span class="page-title-icon bg-gradient-primary text-white mr-2">
                      <i class="mdi mdi-rss "></i>
                    </span> Events </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>


    <div class="page-header">


    </div>
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th> User </th>
                                <th>  Events  </th>
                                <th> Date </th>
                                @can('onlyAdmin')
                                <th style="text-align: center"> Edit </th>
                                <th style="text-align: center"> Delete </th>
                                @endcan
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($events as $event)
                                <tr>

                                    <td class="py-1">
                                        <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                                    </td>
                                    <td style="font-weight: bold">
                                        {{$event->name}}
                                    </td>
                                    <td> {{$event->date}}</td>
                                    @can('onlyAdmin')
                                    <td style="text-align: center"><a href="/event/{{$event->id}}/edit"> <i class="mdi mdi-border-color "></i></a> </td>
                                    <td style="text-align: center">
                                        <form action="/events/{{$event->id}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button style="border: none; background-color: transparent" type="submit">
                                                <i style="color: blue" class="mdi mdi-delete" ></i>
                                            </button>
                                        </form>
                                    </td>
                                    @endcan
                                </tr>
                            @endforeach



                            </tbody>

                        </table>
                    </div>



                </div>
                <div class=" container ">
                    {{$events->links()}}
                </div>
            </div>


        </div>
@endsection
