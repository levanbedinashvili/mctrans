<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Filialebi extends Model
{

    protected $table = "filialebi";
    protected $primaryKey = 'filialebi_id';
    protected $guarded=[];
    public $timestamps = false;


    public static function get_all(){
        $value=DB::table('filialebi')->orderBy('filialebi_id', 'desc')->get();
        return $value;
    }

    public static function get_c($id){
        $value=DB::table('filialebi')->where('filialebi_id', $id)->first();
        return $value;
    }

}
