@extends('admin.layouts.app')
@section('content')

<main class="py-4">
    <div class="container">

        <div class="alert alert-success" id="success_msg" style="display: none;">
            Saved
        </div>

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <h3>Create New Ad.</h3>

                </div>
                
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif

                <br>
                <form method="POST" action="{{url(route('time.store'))}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control" name="duration" placeholder="enter the time by seconds" required>
                    </div>

                    <div class="form-group">
                        <label for="frequency">Frequency</label>
                        <input type="text" class="form-control" name="frequency" placeholder="enter the appearance number per minute" required>
                    </div>

                    <button class="btn btn-primary">Create</button>
                </form>


            </div>
        </div>
    </div>

</main>

@stop