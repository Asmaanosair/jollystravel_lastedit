<?php

namespace App\Http\Controllers;

use App\admin_services;
use Illuminate\Http\Request;

class admin_servicecontroller extends Controller
{
    public function index(){
        $prog=admin_services::all();

        return view('admin.service.admin_service',['prog'=>$prog]);
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
        $test=new admin_services();
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
            return back()->with('success', 'Profile updated!');
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
        $test=admin_services::find($id);
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

            return back();
        }

    }
    function delete($id){
        $test=admin_services::find($id);
        $test->delete();
        return back();

    }
}
