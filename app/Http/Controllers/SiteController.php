<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SiteController extends Controller
{
    function Index(Request $request){
        return Inertia::render('Index');
    }

    function Page1(Request $request){
        $JSON=['name' => 'Rabbil','age'=>38,'city'=>'Dhaka'];
        return Inertia::render('Page1',['data'=>$JSON]);
    }

    function Page2(Request $request){
        $meta=['title' => 'This is title'];
        return Inertia::render('Page2')->withViewData(['meta' => $meta]);
    }

    function Page3(Request $request){
        $SharedData = ['message'=>'Test Message ','status' => true,'share_data'=>"This is Shared Data"];
        return Inertia::render('Page3')->with($SharedData);
    }


    function Page4(Request $request){
        return Inertia::render('Page4');
    }

    function PostBackRequest(Request $request){
        $JsonObject= $request->input();
        $data = ['message'=>'Submit Success','status' => true,'share_data'=>$JsonObject];
        return redirect()->route('Page4')->with($data);
    }


    function Page5(Request $request){
        $meta=['title' => 'Title','description'=>"description"];
        return Inertia::render('Page5',['meta'=>$meta]);
    }


}
