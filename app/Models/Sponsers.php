<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sponsers extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image', 'heading', 'sub_heading', 'description', 'url'
    ];

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'sponsers';
}