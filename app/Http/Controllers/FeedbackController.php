<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Http\Requests\FeedbackRequest;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(){
        return view('app');
    }

    public function saveFeedback(FeedbackRequest $request){

        $feedback = new Feedback;

        $feedback->name = $request->input('name');
        $feedback->phone = $request->input('phone');
        $feedback->text=$request->input('text');
        $feedback->save();
        return redirect()->back()->with('status', json_encode(['status'=>'Your feedback created!']));
    }

}
