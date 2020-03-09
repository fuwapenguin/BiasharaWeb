<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    //
    protected $table = 'demand';
    public $primaryKey  = 'demand_id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
}
