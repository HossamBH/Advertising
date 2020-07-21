@extends('admin.layouts.app')
@section('content')
    <div class="container">

                <div class="alert alert-success" id="success_msg" style="display: none;">
                    Updated
                </div>

                <div class="flex-center position-ref full-height">
                    <div class="content">
                        <div class="title m-b-md">
                            <h3>Edit Ad.</h3>

                        </div>
                        
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        <br>
                        <form method="POST" action="{{url(route('time.update'))}}" enctype="multipart/form-data">
                            @csrf

                            <input type="text" style="display: none;" class="form-control" value="{{$time->id}}" name="id" required>

                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="text" class="form-control" name="duration" placeholder="enter the time by seconds" value="{{$time->duration}}" required>
                            </div>

                            <div class="form-group">
                                <label for="frequency">Frequency</label>
                                <input type="text" class="form-control" name="frequency" placeholder="enter the appearance number per minute" value="{{$time->frequency}}" required>
                            </div>

                            <button class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
@stop