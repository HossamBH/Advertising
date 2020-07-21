<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;
use App\Models\Time;
use App\Events\AdViewer;

class AdController extends Controller
{
    public function index(){
    	$ads = Ad::paginate(5);
    	return view('site.ad', compact('ads'));
    }

    public function display(Request $request){
    	$time = Time::first();
    	$display = $time->duration*1000;
    	$hide = (60/$time->frequency-$time->duration)*1000;

    	$data = array(
           'hide'  => $hide,
           'display' => $display
          );

          echo json_encode($data);
    }
    // count viewer doesn't work
    public function viewers(Request $request){
      $ad = Ad::find($request->id);
      $viewers = $ad->viewers +1;
      $ad->update([
        'viewers' => $viewers,
      ]);
      $ad->save();
      return redirect(route('ad.index'));
    }
}
