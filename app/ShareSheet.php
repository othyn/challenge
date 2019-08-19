<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShareSheet extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_name',
        'friend_name',
        'friend_email',
    ];
}
