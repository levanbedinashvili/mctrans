<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\About;
use App\Ratom_chven;
use App\Service_list;
use App\Filialebi;
use App\Photo_gallery;
use App\Video_gallery;
use App\Blogs;
use App\Contact;
use App\Mxileba;
use App\Main_page;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('adminadmin.home');
    }

    public function contact()
    {
        $info = Contact::firstOrFail();
        return view('adminadmin.contact', compact('info'));
    }

    public function mtavari_update(Request $request)
    {
        $generate = Main_page::firstOrFail();
        if(request()->has('image'))
        {
            $generate->update([
                'image' => request()->image->store('mtavari', 'public'),
            ]);
            return redirect()->back()->with('successimage','ფოტო წარმატებით განახლდა!');
        }
        return redirect()->back()->with('dangerimage','ფოტოს განახლება ვერ მოხერხდა!');
    }

    public function contact_update(Request $request)
    {
        $generate = Contact::firstOrFail();
        $generate->contact_youtube = $request->contact_youtube;
        $generate->contact_instagram = $request->contact_instagram;
        $generate->contact_facebook = $request->contact_facebook;
        $generate->contact_address_geo = $request->contact_address_geo;
        $generate->contact_address_eng = $request->contact_address_eng;
        $generate->contact_address_rus = $request->contact_address_rus;
        $generate->contact_phone_one = $request->contact_phone_one;
        $generate->contact_phone_two = $request->contact_phone_two;
        $generate->contact_email_one = $request->contact_email_one;
        $generate->contact_email_two = $request->contact_email_two;
        $generate->contact_time = $request->contact_time;
        $generate->save();
        return redirect()->back()->with('success', 'კონტაქტი წარმატებით განახლდა!');
    }

    public function media_blogs()
    {
        $info = Blogs::orderBy('news_id', 'desc')->get();
        return view('adminadmin.media_blogs', compact('info'));
    }

    public function media_blogs_add()
    {
        $info = "";
        return view('adminadmin.media_blogs_add', compact('info'));
    }

    public function media_blogs_drop($id)
    {
        $Temp = new Blogs();
        $Temp->destroy($id);
        return redirect()->back();
    }

    public function media_blogs_add_insert(Request $request)
    {

        $info = new Blogs();
        $info->news_title_geo = $request->news_title_geo;
        $info->news_title_eng = $request->news_title_eng;
        $info->news_title_rus = $request->news_title_rus;
        $info->news_text_geo = $request->news_text_geo;
        $info->news_text_eng = $request->news_text_eng;
        $info->news_text_rus = $request->news_text_rus;
        $info->save();
        $this->storeImageBlog($info);
        return redirect()->back()->with('success', 'სიახლე წარმატებით დაემატა!');
    }

    public function media_blogs_details($id)
    {
        $info = Blogs::where('news_id', $id)->firstOrFail();
        return view('adminadmin.media_blogs_edit', compact('info'));
    }

    public function media_blogs_post_update(Request $request, $id)
    {

        $generate = Blogs::where('news_id', $id)->first();
        $generate->news_title_geo = $request->news_title_geo;
        $generate->news_title_eng = $request->news_title_eng;
        $generate->news_title_rus = $request->news_title_rus;
        $generate->news_text_geo = $request->news_text_geo;
        $generate->news_text_eng = $request->news_text_eng;
        $generate->news_text_rus = $request->news_text_rus;
        $generate->save();
        $this->storeImageBlog($generate);
        return redirect()->back()->with('success', 'სიახლე წარმატებით დარედაქტირდა!');
    }

    public function media_video()
    {
        $info = Video_gallery::orderBy('video_gallery_id', 'desc')
                                ->get();
        return view('adminadmin.media_video', compact('info'));

    }

    public function media_video_add_insert(Request $request)
    {
        $link = $request->video_gallery_url;
        $video_id = explode("?v=", $link);
        $video_id = $video_id[1];
        $info = new Video_gallery();
        $info->video_gallery_url = $video_id;
        $info->save();
        return redirect()->back()->with('success', 'ვიდეო წარმატებით დაემატა გალერიაში!');
    }

    public function media_video_edit($id)
    {
        $info = Video_gallery::where('video_gallery_id', $id)->firstOrFail();
        return view('adminadmin.media_video_edit', compact('info'));

    }

    public function media_video_update(Request $request, $id)
    {

        $link = $request->video_gallery_url;
        $video_id = explode("?v=", $link);
        $video_id = $video_id[1]; 
        $info = Video_gallery::where('video_gallery_id', $id)->firstOrFail();
        $info->video_gallery_url = $video_id;
        $info->save();
        return redirect()->back()->with('success', 'ვიდეო წარმატებით განახლდა გალერიაში!');
    }

    public function media_video_drop($id)
    {
        $Temp = new Video_gallery();
        $Temp->destroy($id);
        return redirect()->back();
    }

    public function media_photo()
    {
        $infos = Photo_gallery::orderBy('photo_gallery_id', 'desc')
                                ->get();
        return view('adminadmin.media_photo', compact('infos'));

    }

    public function media_photo_add_insert(Request $request)
    {
        if ($request->hasFile('image')) {
            foreach($request->file('image') as $file){
                $path = $file->store('public/photogallery');
                $gallery = new Photo_gallery;
                $gallery->image = $path;
                $gallery->save();
            }
            return  back()->with('success', "სურათები წარმატებით დაემატა!");
        }
        return  back()->with('danger', "სურათების ატვირთვა ვერ მოხერხდა!");
    }

    public function media_photo_drop($id)
    {
        $Temp = new Photo_gallery();
        $Temp->destroy($id);
        return redirect()->back();
    }

    public function filialebi_all()
    {
        $info = Filialebi::get();
        return view('adminadmin.filialebi_all', compact('info'));
    }

    public function filialebi_add()
    {
        $info = "";
        return view('adminadmin.filialebi_add', compact('info'));
    }

    public function filialebi_drop($id)
    {
        $Temp = new Filialebi();
        $Temp->destroy($id);
        return redirect()->back();
    }

    public function filialebi_add_insert(Request $request)
    {
        $info = new Filialebi();
        $info->filialebi_title_geo = $request->filialebi_title_geo;
        $info->filialebi_title_eng = $request->filialebi_title_eng;
        $info->filialebi_title_rus = $request->filialebi_title_rus;
        $info->filialebi_text_geo = $request->filialebi_text_geo;
        $info->filialebi_text_eng = $request->filialebi_text_eng;
        $info->filialebi_text_rus = $request->filialebi_text_rus;
        $info->save();
        $this->storeImageFilialebi($info);
        return redirect()->back()->with('success', 'ფილიალი წარმატებით დაემატა!');
    }

    public function filialebi_details($id)
    {
        $info = Filialebi::where('filialebi_id', $id)->firstOrFail();
        return view('adminadmin.filialebi_edit', compact('info'));
    }

    public function filialebi_post_update(Request $request, $id)
    {
        $generate = Filialebi::where('filialebi_id', $id)->firstOrFail();
        $generate->filialebi_title_geo = $request->filialebi_title_geo;
        $generate->filialebi_title_eng = $request->filialebi_title_eng;
        $generate->filialebi_title_rus = $request->filialebi_title_rus;
        $generate->filialebi_text_geo = $request->filialebi_text_geo;
        $generate->filialebi_text_eng = $request->filialebi_text_eng;
        $generate->filialebi_text_rus = $request->filialebi_text_rus;
        $generate->save();
        $this->storeImageFilialebi($generate);
        return redirect()->back()->with('success', 'ფილიალი წარმატებით განახლდა!');
    }

    public function service_all()
    {
        $info = Service_list::orderBy('service_list_id', 'desc')->get();
        return view('adminadmin.service_all', compact('info'));
    }

    public function service_add()
    {
        return view('adminadmin.service_add');
    }

    public function service_drop($id)
    {
        $Temp = new Service_list();
        $Temp->destroy($id);
        return redirect()->back();
    }

    public function service_add_insert(Request $request)
    {
        $info = new Service_list();
        $info->service_list_title_geo = $request->service_list_title_geo;
        $info->service_list_title_eng = $request->service_list_title_eng;
        $info->service_list_title_rus = $request->service_list_title_rus;
        $info->service_list_text_geo = $request->service_list_text_geo;
        $info->service_list_text_eng = $request->service_list_text_eng;
        $info->service_list_text_rus = $request->service_list_text_rus;
        $info->save();
        $this->storeImageServices($info);
        return redirect()->back()->with('success', 'სერვისი წარმატებით დაემატა!');
    }

    public function service_details($id)
    {
        $info = Service_list::where('service_list_id', $id)->firstOrFail();
        return view('adminadmin.service_edit', compact('info'));
    }

    public function service_post_update(Request $request, $id)
    {
        $generate = Service_list::where('service_list_id', $id)->firstOrFail();
        $generate->service_list_title_geo = $request->service_list_title_geo;
        $generate->service_list_title_eng = $request->service_list_title_eng;
        $generate->service_list_title_rus = $request->service_list_title_rus;
        $generate->service_list_text_geo = $request->service_list_text_geo;
        $generate->service_list_text_eng = $request->service_list_text_eng;
        $generate->service_list_text_rus = $request->service_list_text_rus;
        $generate->save();
        $this->storeImageServices($generate);
        return redirect()->back()->with('success', 'სერვისი წარმატებით განახლდა!');
    }

    public function service_post_update_image(Request $request)
    {
        $service_list_id = $request->service_list_id;
        $service_list_image = $request->service_list_image;

        $generate = Service_list::where('service_list_id', $service_list_id)->first();
        $generate->service_list_image=$service_list_image;
        $generate->save();
        return redirect()->back();
    }

    public function main()
    {
        $info = Ratom_chven::firstorFail();
        return view('adminadmin.main', compact('info'));
    }

    public function main_update(Request $request)
    {
        $generate = Ratom_chven::firstOrFail();
        $generate->ratom_chven_text_geo = $request->ratom_chven_text_geo;
        $generate->ratom_chven_text_eng = $request->ratom_chven_text_eng;
        $generate->ratom_chven_text_rus = $request->ratom_chven_text_rus;
        $generate->save();
        return redirect()->back()->with('success', 'ინფორმაცია წარმატებით განახლდა!');
    }

    public function about()
    {
        $info = About::firstorFail();
        return view('adminadmin.about', compact('info'));
    }

    public function about_update(Request $request)
    {
        $generate = About::firstOrFail();
        $generate->about_text_geo= $request->about_text_geo;
        $generate->about_text_eng= $request->about_text_eng;
        $generate->about_text_rus= $request->about_text_rus;
        $generate->save();
        return redirect()->back()->with('success', 'ინფორმაცია წარმატებით განახლდა!');
    }
    
    public function about_update_img(Request $request)
    {
        $generate = About::firstOrFail();
        if(request()->has('image'))
        {
            $generate->update([
                'image' => request()->image->store('about', 'public'),
            ]);
            return redirect()->back()->with('successimage','ფოტო წარმატებით განახლდა!');
        }
        return redirect()->back()->with('dangerimage','ფოტოს განახლება ვერ მოხერხდა!');
    }

    public function mxileba_new()
    {
        $info = Mxileba::where('seen', 0)->orderBy('id', 'desc')->get();
        return view('adminadmin.mxileba_new', compact('info'));
    }

    public function mxileba_seen()
    {
        $info = Mxileba::where('seen', 1)->orderBy('id', 'desc')->get();
        return view('adminadmin.mxileba_seen', compact('info'));
    }

    public function mxileba_details($id)
    {
        $info = Mxileba::where('id', $id)->firstOrFail();
        if($info-> seen == 0){
            $info->seen = 1;
            $info->save();
        }
        return view('adminadmin.mxileba_details', compact('info'));
    }

    public function mxileba_drop($id)
    {
        $Temp = new Mxileba();
        $Temp->destroy($id);
        return redirect()->back();
    }

    public function storeImageServices($createdObject)
    {
        if(request()->has('image'))
        {
            $createdObject->update([
                'image' => request()->image->store('services', 'public'),
            ]);
        }
    }

    public function storeImageFilialebi($createdObject)
    {
        if(request()->has('image'))
        {
            $createdObject->update([
                'image' => request()->image->store('filialebi', 'public'),
            ]);
        }
    }

    public function storeImageBlog($createdObject)
    {
        if(request()->has('image'))
        {
            $createdObject->update([
                'image' => request()->image->store('blogs', 'public'),
            ]);
        }
    }
}
