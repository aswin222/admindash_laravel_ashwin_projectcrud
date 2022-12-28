@extends('layouts.panel')
  
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
                <h4>Projects</h4>
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
            <a class="btn btn-success" href="{{ url('create') }}"> Create New Project</a>
            <a class="btn btn-danger" href="#" id="deleteAllSelectedRecord"> Delete Selected Data</a>

            </div>
        </div>
    </div>
     
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th><input type="checkbox" id="chkCheckAll"/></th>
            <th>No</th>
            <th>Project Image</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($projects as $project)
        <tr>
            <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{$project->id}}" /></td>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $project->image }}" width="100px"></td>
            <td>{{ $project->name }}</td>
            <td>{{ $project->detail }}</td>
            <td>
                <form action="{{ route('destroy',$project->id) }}" method="POST">
      
                    <a class="btn btn-info" href="{{ route('show',$project->id) }}">Show</a>
       
                    <a class="btn btn-primary" href="{{ route('edit',$project->id) }}">Edit</a>
      
                    @csrf
                    @method('DELETE')
         
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
     
    {!! $projects->links() !!}


    <script>
    $(function(e){
        $("#chkCheckAll").click(function(){
            $(".checkBoxClass").prop('checked',$(this).prop('checked'));
        })
    });
    </script>
 
@endsection

</div>
</div>
</div>

