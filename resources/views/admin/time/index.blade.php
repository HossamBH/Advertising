@extends('admin.layouts.app')
@section('content')
 
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ads
        <small>list</small>
      </h1>
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol> -->
    </section>



    <div class="alert alert-success" id="success_msg" style="display: none;">
        Deleted
    </div>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          @if(!$time)
           <a href="{{url(route('time.create'))}}" class="btn btn-success"><i class="fa fa-create"></i>Create New Ad.</a></td>
          @endif
        </div>
        <div class="box-body">
        @if($time)
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                  <th>Duration</th>
                  <th>Frequency</th>
                  <th>Edit</th>
                </tr>
                </thead>

                <tbody>
                    <tr>
                      <td>{{$time->duration}}</td>
                      <td>{{$time->frequency}}</td>
                      <td>
                          <a href="{{url('time/edit/'.$time->id)}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i>Edit</a></td>
                    </tr>
                </tbody>
              </table>
            </div>
            @else
            <div class="alert alert-danger" role="alert">
              No data
            </div>
          @endif
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
@endsection
