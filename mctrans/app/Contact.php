<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Contact extends Model
{

    protected $table = "contact";
    protected $primaryKey = 'contact_id';
    protected $guarded=[];
    public $timestamps = false;


    public static function get_all(){
        $value=DB::table('contact')->orderBy('contact_id', 'desc')->get();
        return $value;
    }

    public static function get_c($id){
        $value=DB::table('contact')->where('contact_id', $id)->first();
        return $value;
    }

}
