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
           <a href="{{url(route('ad.create'))}}" class="btn btn-success"><i class="fa fa-create"></i>Create New Ad.</a></td>
        </div>
        <div class="box-body">
        @if(count($ads))
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>From</th>
                  <th>To</th>
                  <th>Image</th>
                  <th>Viewers</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>

                <tbody>
                  @foreach($ads as $row)
                    <tr">
                      <td>{{$loop->iteration}}</td>
                      <td><a href="{{url('ad/show/' . $row->id)}}">{{$row->title}}</a></td>
                      <td>{{$row->from}}</td>
                      <td>{{$row->to}}</td>
                      <td>
                        <img src="{{$row->image}}" class="img-rounded" width="75px">
                      </td>
                      <td>{{$row->viewers}}</td>
                      <td>
                          <a href="{{url('ad/edit/'.$row->id)}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i>Edit</a></td>
                      <td>
                          <a href="{{url('ad/delete/'.$row->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a></td> 
                      </td>
                    </tr>
                  @endforeach
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
