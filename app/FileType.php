<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FileType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'fileTypes';
    protected $fillable = [
        'name',
    ];
}
