<?php

namespace App\Http\Controllers;

use App\page_trans;
use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    function home(){
        $home=page_trans::find(1);
        return view('admin.transilation.pages_trans',['home'=>$home]);
    }

    function update(Request $request){




        $test=page_trans::find(1);
        $test->owner=implode(',',$request->owner);
        $test->viewowner=implode(',',$request->viewowner);
        $test->information=implode(',',$request->information);
        $test->top=implode(',',$request->top);
        $test->details=implode(',',$request->details);
        $test->program=implode(',',$request->program);
        $test->reviews=implode(',',$request->reviews);
        $test->available=implode(',',$request->available);
        $test->video=implode(',',$request->video);
        $test->favorite_tour=implode(',',$request->favorite_tour);
        $test->cleanliness=implode(',',$request->cleanliness);
        $test->comfort=implode(',',$request->comfort);
        $test->staf=implode(',',$request->staf);
        $test->verygood=implode(',',$request->verygood);
        $test->good=implode(',',$request->good);
        $test->facilities=implode(',',$request->facilities);
        $test->addreview=implode(',',$request->addreview);
        $test->submitreview=implode(',',$request->submitreview);
        $test->yourreview=implode(',',$request->yourreview);
        $test->yourscore=implode(',',$request->yourscore);
        $test->ouroffice=implode(',',$request->ouroffice);
        $test->sendmessage=implode(',',$request->sendmessage);
        $test->requestnow=implode(',',$request->requestnow);
        $test->yourname=implode(',',$request->yourname);
        $test->youremail=implode(',',$request->youremail);
        $test->yourmessage=implode(',',$request->yourmessage);
        $test->website=implode(',',$request->website);
        $test->Our_Office=implode(',',$request->Our_Office);
        $test->Working_Hours=implode(',',$request->Working_Hours);
        $test->Register=implode(',',$request->Register);


        if($test->save()){

            session()->flash("success","Success Editing");
            return back();
        }

    }
}
