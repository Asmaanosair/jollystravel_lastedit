<?php

namespace App\Http\Controllers;

use App\message;
use App\news;
use App\written;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Messagecontroller extends Controller
{
    public function index(){
        $prog=message::paginate(10);
        return view('admin.messages.messages',['prog'=>$prog]);
    }


    function delete($id){
        $test=message::find($id);
        $test->delete();
        return back();

    }
}
