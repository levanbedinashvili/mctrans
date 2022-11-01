<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ratom_chven extends Model
{

    protected $table = "ratom_chven";
    protected $primaryKey = 'ratom_chven_id';
    protected $guarded=[];
    public $timestamps = false;


    public static function get_all(){
        $value=DB::table('ratom_chven')->orderBy('ratom_chven_id', 'desc')->get();
        return $value;
    }

    public static function get_c($id){
        $value=DB::table('ratom_chven')->where('ratom_chven_id', $id)->first();
        return $value;
    }
}
