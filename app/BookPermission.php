<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookPermission extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'type','render_type','allowed','initial','accrue','max','max_resolution','expires','expires_on'
        ,'single_device','device_type','book_id','created','modified'
    ];

}
