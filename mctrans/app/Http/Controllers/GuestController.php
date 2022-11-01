<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\About;
use App\Service_list;
use App\Photo_gallery;
use App\Video_gallery;
use App\Blogs;
use App\Filialebi;
use App\Mxileba;
use App\Main_page;


class GuestController extends Controller
{


    public function index()
    {
        $last_news = Blogs::OrderBy('news_id' , 'DESC')->take(3)->get();
        $main = Main_page::firstOrFail();
        return view('main' , compact('last_news', 'main'));
    }

    public function about()
    {
        $info = About::firstOrFail();
        return view('about', compact('info'));
    }

    public function branch_detail($id)
    {
        $filiali = Filialebi::where('filialebi_id' , $id)->first();
        if(!empty($filiali))
        {
            return view('branches', compact('filiali'));
        }
        return back();
    }

    public function service_detail($id)
    {
        $info = Service_list::where('service_list_id' , $id)->first();
        if(!empty($info))
        {
            return view('service', compact('info'));
        }
        return back();
    }

    public function gallery()
    {
        $gallery = Photo_gallery::orderBy('photo_gallery_id', 'desc')->get();
        return view('gallery', compact('gallery'));
    }

    public function video_gallery()
    {
        $video_gallery = Video_gallery::orderBy('video_gallery_id', 'desc')->get();
        return view('video_gallery', compact('video_gallery'));
    }

    public function news_list()
    {
        $newses = Blogs::orderBy('news_id', 'desc')->paginate(10);
        return view('news_list', compact('newses'));
    }

    public function news_detail($id)
    {
        $news = Blogs::where('news_id' , $id)->first();
        $last_news = Blogs::OrderBy('news_id' , 'DESC')->take(5)->get();
        $gallery_count = Photo_gallery::get()->count();
        $video_count = Video_gallery::get()->count();
        $news_count = Blogs::get()->count();

        if(!empty($news))
        {
            return view('news_detail' , compact('news' , 'gallery_count' , 'video_count' , 'news_count' , 'last_news'));
        }
        return back();
    }

    public function contact()
    {
        return view('contact');
    }

    public function mxileba()
    {
        return view ('mxileba');
    }

    public function mxileba_insert(Request $request)
    {
        $Mxileba = new Mxileba;
        $Mxileba->ip =  $request->ip();
        $Mxileba->agent = $request->server('HTTP_USER_AGENT');
        $Mxileba->message = $request->message;
        $Mxileba->date = Carbon::now();;
        $Mxileba->save();
        return back()->with('success' , 'თქვენ წერილი წარმატებით გაიგზავნა!');
    }

    public function adminlogin()
    {
        $info = "1";
        return view('adminadmin.login', compact('info'));
    }





}
/*


*/
