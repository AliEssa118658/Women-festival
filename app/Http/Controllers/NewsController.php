<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Miss;
use App\Models\Honorary;
use App\Models\Firsts;
use App\Models\Ambassador;
use App\Models\Galleries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsController extends Controller
{
    public function showHomePage(){
        $news = collect();
        $best_news = News::limit(10)->get();


        foreach($best_news as $new) {
            $news->push(News::find($new->id));
        }

      //  $cities = Cities::all();
        return view('welcome')->with([
            'news' => $news,

        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($newId)
    {
        $new = News::findOrFail($newId);
        $newnext = News::where('id', '>', $newId)->orderBy('id', 'asc')->first();

        return view('news', compact('new', 'newnext'));
    }



    public function missArab()
    {
        $missarabs = Miss::get();
        return view('miss-arab', compact('missarabs'));
    }


    public function honorary()
    {
        $honorarys = Honorary::get();
        $ambassadors = Ambassador::get();
        return view('honorary', compact('honorarys','ambassadors'));
    }

    public function FirstGen()
    {
        $firsts = Firsts::get();
        return view('first-gen', compact('firsts'));
    }

    public function gallery()
    {
        $galleries = Galleries::get();

        // Decode JSON data and store it in a new array
        $galleryData = [];
        foreach ($galleries as $gallery) {
            $decodedData = json_decode($gallery->data, true);
            if (is_array($decodedData)) {
                $galleryData[] = $decodedData;
            }
        }

        return view('gallery', compact('galleryData'));
    }

    public function FirstGenIndex($firstId)
    {
        $first = Firsts::findOrFail($firstId);
        return view('first', compact('first'));
    }


    public function contactEmail(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'subject' => $request->subject,
            'msg' => $request->msg,
        );

        $emails = ['ali6721985@gmail.com', $request->email];

        Mail::send('emails.contact', $data, function($message) use ($emails) {
            $message->to($emails)->subject('Contact US');
        });

        return "Thank you for contacting us";
    }
}
