<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookPrice extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'currencycode','price','taxable','taxamount','fromdate','todate','book_id'
    ];
}
