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
                        <form method="POST" action="{{url(route('ad.update'))}}" enctype="multipart/form-data">
                            @csrf

                            <input type="text" style="display: none;" class="form-control" value="{{$ad->id}}" name="id" required>

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$ad->title}}" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" defaultValue="{{$ad->description}}" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" id="file" class="form-control" name="image" value="{{$ad->image}}" required>
                            </div>

                            <div class="form-group">
                                <label for="from">Ad. Beginning Date</label>
                                <input type="date" class="form-control" name="from" value="{{$ad->from}}" required>
                            </div>

                            <div class="form-group">
                                <label for="to">Ad. End Date</label>
                                <input type="date" class="form-control" name="to" value="{{$ad->to}}" required>
                            </div>

                            <button class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
@stop