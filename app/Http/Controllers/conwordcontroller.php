<?php

namespace App\Http\Controllers;

use App\contact_word;
use Illuminate\Http\Request;

class conwordcontroller extends Controller
{




    function index(){
        $home=contact_word::find(1);
        return view('admin.transilation.con_trans',['home'=>$home]);
    }

    function update(Request $request){


        $test=contact_word::find(1);
        $test->phone1=implode(',',$request->phone1);
        $test->phone2=implode(',',$request->phone2);
        $test->web=implode(',',$request->web);
        $test->contact=implode(',',$request->contact);
        $test->mail=implode(',',$request->mail);
        $test->get=implode(',',$request->get);
        $test->office=implode(',',$request->office);
        $test->name=implode(',',$request->name);
        $test->email=implode(',',$request->email);
        $test->phone=implode(',',$request->phone);
        $test->sub=implode(',',$request->sub);
        $test->msg=implode(',',$request->msg);
        $test->send=implode(',',$request->send);
        $test->work=implode(',',$request->work);





        if($test->save()){

            session()->flash("success","Success Editing");
            return back();
        }

    }
}
