<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'subject',
        'sent_at',
        'read_at',
        'archived_at', // could be used to define a global scope
    ];

}
