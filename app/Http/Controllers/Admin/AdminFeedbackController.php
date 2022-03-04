<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Suggestion;
use Illuminate\Http\Request;

class AdminFeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::latest()->get();
        $suggestions = Suggestion::latest()->get();
        return view('admin.feedback.index', compact('feedbacks', 'suggestions'));
    }

    public function show($id)
    {
        $feedback = Feedback::where('id', '=', $id)->first();
        return view('admin.feedback.show', compact('feedback'));
    }

    public function destroy($id, $flag){
        if($flag == '1'){
            $feedback123 = Feedback::where('id', '=', $id)->first();
            $feedback123->delete();
            return redirect()->back()->with('message', 'Feedback deleted Successfully');
        }elseif($flag == '2'){
           // dd($id);
            $ss123 = Suggestion::where('id', '=', $id)->first();
            $ss123->delete();
            return redirect()->back()->with('message', 'Suggestion deleted successfully');
        }else{
            return redirect()->back();
        }
    } 

}
