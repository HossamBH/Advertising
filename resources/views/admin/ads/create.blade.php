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
                <form method="POST" action="{{url(route('ad.store'))}}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" id="file" class="form-control" name="image" required>
                    </div>

                    <div class="form-group">
                        <label for="from">Ad. Beginning Date</label>
                        <input type="date" class="form-control" name="from" required>
                    </div>

                    <div class="form-group">
                        <label for="to">Ad. End Date</label>
                        <input type="date" class="form-control" name="to" required>
                    </div>

                    <button class="btn btn-primary">Create</button>
                </form>


            </div>
        </div>
    </div>

</main>

@stop