
@extends('layouts.panel')
@section('title')
    Home
@endsection
@section('content')

    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">


                <!-- Page Header -->
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Welcome To Dashboard</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Project Dashboard</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- End Page Header -->

                <!--Row-->
                <div class="row row-sm">
                    <div class="col-sm-12 col-lg-12 col-xl-8">
                        <div class="row row-sm">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="card-item">
                                            <div class="card-item-icon card-icon">
                                                <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect height="14" opacity=".3" width="14" x="5" y="5"/><g><rect fill="none" height="24" width="24"/><g><path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z"/><rect height="5" width="2" x="7" y="12"/><rect height="10" width="2" x="15" y="7"/><rect height="3" width="2" x="11" y="14"/><rect height="2" width="2" x="11" y="10"/></g></g></g></svg>
                                            </div>
                                            <div class="card-item-title mb-2">
                                                <label class="main-content-label tx-13 font-weight-bold mb-1">Total Projects</label>
                                            </div>
                                            <div class="card-item-body">
                                                <div class="card-item-stat">
                                                    <h4 class="font-weight-bold">{{$project}}</h4>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
