<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
 * The attributes that are mass assignable.
 *
 * @var array
 */
    protected $fillable = [
        'organisation_id', 'publisher_id','title', 'creator','record_reference','doi','isbn','language','epubtype_id'
        ,'organisation_template_id','resource','description','packaged','loan','loan_max','archived','created','modified'
    ];
}
