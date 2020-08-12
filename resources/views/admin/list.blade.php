@extends('admin.layout1')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-library-books "></i>
                </span> Articles </h3>
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

                            @if($articles->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-striped ">
                                    <thead>
                                    <tr>
                                        <th> User </th>
                                        <th> Author </th>
                                        <th>  Title  </th>
                                        <th> Date </th>
                                        <th style="text-align: center"> Edit </th>
                                        <th style="text-align: center"> Delete </th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($articles as $article)
                                        <tr>

                                            <td class="py-1">
                                                <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                                            </td>
                                            <td> {{$article->getAuthor($article->id)}} </td>
                                            <td style="font-weight: bold">
                                                {{$article->title}}
                                                {{--                                        <div class="progress">--}}
                                                {{--                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
                                                {{--                                        </div>--}}
                                            </td>
                                            <td> {{$article->created_at->format('d M, Y')}}</td>
                                            <td style="text-align: center"><a href="/admin/{{$article->id}}/edit"> <i class="mdi mdi-border-color "></i></a> </td>
                                            <td style="text-align: center">
                                                <form action="/admin/{{$article->id}}" method="POST">
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
                            @else
                                <h4> No Written Articles Yet</h4>
                            @endif

                        </div>

                        <div class=" container ">
                            {{$articles->links()}}
                        </div>
                </div>

@endsection
