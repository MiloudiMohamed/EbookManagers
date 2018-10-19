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
    protected $guarded = [];

    public function EpubType()
    {
        return $this->hasOne('\App\EPUBType','id','epubtype_id');
    }

}
