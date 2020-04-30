<?php

namespace App\Http\Controllers;

use App\booking;
use App\written;
use App\User;
use Illuminate\Http\Request;

class Bookingcontroller extends Controller
{
    public function index(){
     
        $prog=booking::paginate(10);
        return view('admin.booking.booking',['prog'=>$prog]);
    }
   
  public  function delete($id){
        $test=booking::find($id);
        $test->delete();
        return back();

    }
}
