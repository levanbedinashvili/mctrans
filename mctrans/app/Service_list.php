<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Service_list extends Model
{

    protected $table = "service_list";
    protected $primaryKey = 'service_list_id';
    protected $guarded=[];
    public $timestamps = false;


    public static function get_all(){
        $value=DB::table('service_list')->orderBy('service_list_id', 'desc')->get();
        return $value;
    }

    public static function get_c($id){
        $value=DB::table('service_list')->where('service_list_id', $id)->first();
        return $value;
    }

}
