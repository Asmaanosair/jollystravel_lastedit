<?php

namespace App\Http\Controllers;

use App\ourpartner;
use Illuminate\Http\Request;
use Alert;
class Ourpartnercontroller extends Controller
{
    public function index(){
        $prog=ourpartner::paginate(10);

        return view('admin.ourpartner.ourpartner',['prog'=>$prog]);
    }
    function add(Request $request){

        $this->validate($request,
            [

                'image'=>'required|mimes:jpeg,bmp,png',
                'name'=>'required',



            ]);
        $test=new ourpartner();
        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
        }
        $test->link=$request->name;

        if($test->save()){
            session()->flash("success","Success Adding");

            return back();
        }

    }
    function update(Request $request,$id){

        $this->validate($request,
            [

                'image'=>'mimes:jpeg,bmp,png',
                'name'=>'required',

            ]);
        $test=ourpartner::find($id);
        $test->link=$request->name;
        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
        }



        if($test->save()){

            session()->flash("success","Success Editing");

            return back();
        }

    }
    function delete($id){
        $test=ourpartner::find($id);
        $test->delete();

        return back();

    }
}
