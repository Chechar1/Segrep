<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asociar extends Model
{
    protected $table = 'asociar';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'server_id',
    ];
}
