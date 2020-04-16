<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $table = 'offers';
    public $primaryKey  = 'offer_id';

    protected $fillable = [
        'offer_id', 'media_id',
    ];

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
}
