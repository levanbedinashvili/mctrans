<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class About extends Model
{

    protected $table = "about";
    protected $primaryKey = 'about_id';
    protected $guarded=[];
    public $timestamps = false;


    public static function get_all(){
        $value=DB::table('about')->orderBy('about_id', 'desc')->get();
        return $value;
    }

    public static function get_c($id){
        $value=DB::table('about')->where('about_id', $id)->first();
        return $value;
    }

}
