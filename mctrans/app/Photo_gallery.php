<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Photo_gallery extends Model
{

    protected $table = "photo_gallery";
    protected $primaryKey = 'photo_gallery_id';
    protected $guarded=[];
    public $timestamps = false;


    public static function get_all(){
        $value=DB::table('photo_gallery')->orderBy('photo_gallery_id', 'desc')->get();
        return $value;
    }

    public static function get_c($id){
        $value=DB::table('photo_gallery')->where('photo_gallery_id', $id)->first();
        return $value;
    }

}
