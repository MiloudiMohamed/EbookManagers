<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CMSFile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','mimetype','filesize','checksum','extension','book_id','filetype_id','created'
    ];
}
