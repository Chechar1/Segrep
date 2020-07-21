<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monitoreo extends Model
{
    protected $table = 'registros';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'cpu', 'memtotal','memus', 'memlib', 'disco',
    ];
}
