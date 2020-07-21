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
        
        <div class="box-body">
            <div class="table-responsive">
              @foreach($ad as $row)
              <table class="table table-bordered">
                  <tr>
                    <th>Title</th>
                    <td>{{$row->title}}</td>
                  </tr>
                  <tr>
                    <th>Description</th>
                    <td>{{$row->description}}</td>
                  </tr>
                  <tr>
                    <th>Image</th>
                    <td><img src="{{$row->image}}" class="img-rounded" width="75px"></td>
                  </tr>
                  <tr>
                    <th>From</th>
                    <td>{{$row->from}}</td>
                  </tr>
                  <tr>
                    <th>To</th>
                    <td>{{$row->to}}</td>
                  </tr>
                  <tr>
                    <th>Viewers</th>
                    <td>{{$row->viewers}}</td>
                  </tr>
              </table>
              @endforeach
            </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
@endsection
