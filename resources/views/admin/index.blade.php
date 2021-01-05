@extends('admin.layout1')

@section('content')

    <div class="page-header">
        <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>


    <div class="row">

        @can('onlyAdmin')
            <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                    <a href="/admin/users" style="text-decoration: none; color: ghostwhite">
                        <div class="card-body">
                            <img src="/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                            <h4 class="font-weight-normal mb-3">Number Of Users <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                            </h4>
                            <h2 class="mb-5">{{$userNum}}</h2>
                            <h6 class="card-text">Every Registered User including You</h6>
                        </div>
                    </a>

                </div>
            </div>
        @endcan

        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
                <a href="/admin/articles" style="text-decoration: none; color: ghostwhite">
                    <div class="card-body">
                        <img src="/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                        <h4 class="font-weight-normal mb-3">Number Of Articles<i class="mdi mdi-chart-line mdi-24px float-right"></i>
                        </h4>
                        <h2 class="mb-5">{{$articleNum}}</h2>
                        @can('onlyAdmin')
                            <h6 class="card-text">Total Number of Article</h6>
                        @endcan
                        @can('onlyEditor')
                            <h6 class="card-text">Total Number of Article Written by You</h6>
                        @endcan
                    </div>
                </a>

            </div>
        </div>



        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                    <img src="/assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3"> Events <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">{{$userNum}}</h2>
                    <h6 class="card-text">Number of Events</h6>
                </div>
            </div>
        </div>
    </div>

@endsection
