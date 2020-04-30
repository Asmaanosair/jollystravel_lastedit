<?php

namespace App\Http\Controllers;

use App\booking_word;
use Illuminate\Http\Request;

class book_wordcontroller extends Controller
{
    function index(){
        $home=booking_word::find(1);
        return view('admin.transilation.book_trans',['home'=>$home]);
    }

    function update(Request $request){
        $test=booking_word::find(1);
        $test->book1=implode(',',$request->book1);
        $test->book2=implode(',',$request->book2);
        $test->cart=implode(',',$request->cart);
        $test->from=implode(',',$request->from);
        $test->to=implode(',',$request->to);
        $test->adult=implode(',',$request->adult);
        $test->child=implode(',',$request->child);
        $test->personal=implode(',',$request->personal);
        $test->billing=implode(',',$request->billing);
        $test->billing1=implode(',',$request->billing1);
        $test->personal2=implode(',',$request->personal2);
        $test->billing2=implode(',',$request->billing2);
        $test->first=implode(',',$request->first);
        $test->last=implode(',',$request->last);

        $test->phone=implode(',',$request->phone);
        $test->email=implode(',',$request->email);
        $test->first1=implode(',',$request->first1);
        $test->last1=implode(',',$request->last1);
        $test->phone1=implode(',',$request->phone1);
        $test->email1=implode(',',$request->email1);
        $test->city=implode(',',$request->city);
        $test->city1=implode(',',$request->city1);

        $test->street=implode(',',$request->street);
        $test->street1=implode(',',$request->street1);
        $test->country1=implode(',',$request->country1);
        $test->country=implode(',',$request->country);
        $test->state=implode(',',$request->state);
        $test->state1=implode(',',$request->state1);
        $test->post=implode(',',$request->post);
        $test->post1=implode(',',$request->post1);
        $test->note=implode(',',$request->note);
        $test->note1=implode(',',$request->note1);
        $test->back=implode(',',$request->back);
        $test->back1=implode(',',$request->back1);
        $test->payment=implode(',',$request->payment);
        $test->confirm=implode(',',$request->confirm);
        $test->thank=implode(',',$request->thank);

        $test->confirm1=implode(',',$request->confirm1);
        $test->send=implode(',',$request->send);




        if($test->save()){

            session()->flash("success","Success Editing");
            return back();
        }

    }
}
