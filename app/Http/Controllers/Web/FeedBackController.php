<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;
use App\Http\Requests\FeedBackRequest;
use App\Models\City;
use App\Models\FeedBack;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks =FeedBack::paginate();
        return view('feedback.index',['feedbacks' => $feedbacks]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feedback = Feedback::find($id);
        if ($feedback) {
            return view('feedback.show',compact('feedback'));
        }
        return redirect()->route('feedback.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = FeedBack::find($id);
        if ($feedback) {
            $feedback->delete();
            return redirect()->route('feedback.index')->with('success','تم الحذف بنجاح');
        }
        return redirect()->route('feedback.index')->with('error','لم يتم الحذف');
    }
}
