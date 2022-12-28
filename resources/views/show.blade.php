@extends('app')
  
@section('content')
<div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">
 <!-- Page Header -->
 <div class="page-header">
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Projects</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Project list</li>
                        </ol>
                    </div>
                </div>
                <!-- End Page Header -->
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Project</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('index') }}"> Back</a>
            </div>
        </div>
    </div>
      
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Project Name:   </strong>
                {{ $project->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Project Details:   </strong>
                {{ $project->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:   </strong><br>
                <img src="/images/{{ $project->image }}" width="500px">
            </div>
        </div>
    </div>
@endsection