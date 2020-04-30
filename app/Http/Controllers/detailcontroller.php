<?php

namespace App\Http\Controllers;

use App\detail;
use Illuminate\Http\Request;

class detailcontroller extends Controller
{
    public function index($id){
        $prog=detail::where('sub_service_id',$id)->get();
        return view('admin.details.details',['prog'=>$prog]);
    }
    public function create($id){
        return view('admin.details.c_details',['id'=>$id]);
    }
    function add(Request $request,$id){

        $this->validate($request,
            [

                'name_en'=>'required',
                'name_fr'=>'required',
                'name_de'=>'required',
                'name_es'=>'required',
                'name_it'=>'required',
                'des_en'=>'required',
                'des_fr'=>'required',
                'des_de'=>'required',
                'des_es'=>'required',
                'des_it'=>'required',






            ]);
        $test=new detail();
        $test->name_en=$request->name_en;
        $test->name_fr=$request->name_fr;
        $test->name_de=$request->name_de;
        $test->name_it=$request->name_it;
        $test->name_es=$request->name_es;

        $test->des_en=$request->des_en;
        $test->des_fr=$request->des_fr;
        $test->des_de=$request->des_de;
        $test->des_it=$request->des_it;
        $test->des_es=$request->des_es;

        $test->sub_service_id=$id;



        if($test->save()){
            session()->flash("success","Success Adding");

            return redirect('gs_admin/detail/'.$id);
        }

    }
    public function edit($id){
        $pro=detail::find($id);


        return view('admin.details.e_details',['pro'=>$pro]);
    }
    function update(Request $request ,$id){

        $this->validate($request,
            [
                'name_en'=>'required',
                'name_fr'=>'required',
                'name_de'=>'required',
                'name_es'=>'required',
                'name_it'=>'required',
                'des_en'=>'required',
                'des_fr'=>'required',
                'des_de'=>'required',
                'des_es'=>'required',
                'des_it'=>'required',

            ]);
        $test=detail::find($id);
        $test->name_en=$request->name_en;
        $test->name_fr=$request->name_fr;
        $test->name_de=$request->name_de;
        $test->name_it=$request->name_it;
        $test->name_es=$request->name_es;

        $test->des_en=$request->des_en;
        $test->des_fr=$request->des_fr;
        $test->des_de=$request->des_de;
        $test->des_it=$request->des_it;
        $test->des_es=$request->des_es;




        if($test->save()){
            session()->flash("success","Success Editing");

            return redirect('gs_admin/detail/'.$test->sub_service_id);
        }

    }
    function delete($id){
        $test=detail::find($id);
        $test->delete();
        return back();

    }
}
