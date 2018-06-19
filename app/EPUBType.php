<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EPUBType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "epubtypes";
    protected $fillable = [
        'name','format'
    ];


    public static function findOnModel($id)
    {
        if(($model = EPUBType::find($id)) !== NULL)
        {
            return $model;
        }
        else{

        }
    }
}
