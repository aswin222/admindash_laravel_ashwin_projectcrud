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
                <h2>Edit Project</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('index') }}"> Back</a>
            </div>
        </div>
    </div>
      
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
     
    <form action="{{ route('update',$project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $project->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $project->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/images/{{ $project->image }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
           <br>   <button type="submit" class="btn btn-info">Submit</button></br>
           <br></br>
            </div>
        </div>
      
    </form>
@endsection