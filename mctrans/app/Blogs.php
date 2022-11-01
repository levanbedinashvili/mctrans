<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Blogs extends Model
{

    protected $table = "news";
    protected $primaryKey = 'news_id';
    protected $guarded=[];
    public $timestamps = false;


    public static function get_all(){
        $value=DB::table('news')->orderBy('news_id', 'desc')->get();
        return $value;
    }

    public static function get_c($id){
        $value=DB::table('news')->where('news_id', $id)->first();
        return $value;
    }

}
