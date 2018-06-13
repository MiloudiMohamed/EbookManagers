<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailerBook extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'emailer_id','book_id','url','click_time','download_time','create_time'
    ];
}
