<?php

namespace App\Http\Controllers;

use App\gallery;
use Illuminate\Http\Request;

class Gallerycontroller extends Controller
{
    public function index(){
        $prog=gallery::paginate(10);

        return view('admin.gallery.gallery',['prog'=>$prog]);
    }
    function add(Request $request){

        $this->validate($request,
            [
                'name_en'=>'required',
                'name_fr'=>'required',
                'name_de'=>'required',
                'name_es'=>'required',
                'name_it'=>'required',
                'image'=>'required|mimes:jpeg,bmp,png',


            ]);
        $test=new gallery();
        if($request->file('image') !=null)
        {
            $filname1=time().".".$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move('img',$filname1);
            $test->img=$filname1;
        }
        $test->name_en=$request->name_en;
        $test->name_fr=$request->name_fr;
        $test->name_de=$request->name_de;
        $test->name_it=$request->name_it;
        $test->name_es=$request->name_es;

        if($test->save()){
            session()->flash("success","Success Adding");
            return back();
        }

    }
    function update(Request $request,$id){

        $this->validate($request,
            [

                'name_en'=>'required',
                'name_fr'=>'required',
                'name_de'=>'required',
                'name_es'=>'required',
                'name_it'=>'required',

            ]);
        $test=gallery::find($id);
        $test->name_en=$request->name_en;
        $test->name_fr=$request->name_fr;
        $test->name_de=$request->name_de;
        $test->name_it=$request->name_it;
        $test->name_es=$request->name_es;
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
        $test=gallery::find($id);
        $test->delete();
        return back();

    }
}
