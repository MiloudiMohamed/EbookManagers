<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','postal_address1','postal_address2','postal_address3',
        'postal_postcode','postal_country','address1','address2','address3',
        'postcode','country','telephone2','telephone','email','primarycontact',
        'accountscontact','subject','from','template','acsid','shared_secret',
        'opt_mass_emailer','opt_reports','opt_loans','created','modified',
    ];
}
