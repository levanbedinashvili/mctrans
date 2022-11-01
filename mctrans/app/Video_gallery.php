<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Video_gallery extends Model
{

    protected $table = "video_gallery";
    protected $primaryKey = 'video_gallery_id';
    protected $guarded=[];
    public $timestamps = false;


    public static function get_all(){
        $value=DB::table('video_gallery')->orderBy('video_gallery_id', 'desc')->get();
        return $value;
    }

    public static function get_c($id){
        $value=DB::table('video_gallery')->where('video_gallery_id', $id)->first();
        return $value;
    }

}
