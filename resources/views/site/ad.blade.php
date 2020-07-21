@extends('site.layout')
@section('content')
      <div class="container marketing">

        <!-- START THE FEATURETTES -->
        @if(count($ads))
        	@foreach($ads as $ad)
        		<div class="row featurette display">
		          <div class="col-md-3">
		            <h2 class="featurette-heading">{{$ad->title}}</h2>
		            <p class="lead">{{$ad->description}}</p>
		          </div>
		          <div class="col-md-5">
		            <img class="bd-placeholder-img" src="{{$ad->image}}">
		          </div>
		        </div>
            <div class="title m-b-md display viewers" id="{{$ad->id}}">
                Number of Ad Viewers are : ({{$ad->viewers}})
            </div>
		        <hr class="featurette-divider">
		    @endforeach
		@else
            <div class="alert alert-danger" role="alert">
              No Ads
            </div>
        @endif
        <!-- /END THE FEATURETTES -->

      </div>
      <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

      <script type="text/javascript">
      	$(document).ready(function(){

            $.ajax({
              method : 'get',
              url : "{{route('ad.display')}}",
              dataType:'json',
              success:function(data){
                disp = data.display;
                hidden = data.hide;
              }
            })
	        
	        window.setInterval(function() {
		        $(".display").delay(disp).hide("fast").delay(hidden).show("fast");
		      }); 
        });
      </script>
      
          <!-- count viewer doesn't work -->
      <script type="text/javascript">
        $(document).on('click', '.viewers', function (e) {
            e.preventDefault();
            var id = $(this).attr('id');
            $.ajax({
              method : 'post',
              url : "{{route('ad.viewers')}}",
              dataType:'json',
              data:{
                '_token': "{{csrf_token()}}",
                'id' : id
              }
              success:function(data){
              }
            }) 
        });
      </script>
@stop