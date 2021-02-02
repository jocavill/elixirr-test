<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    const CREATED_AT = 'sent_at';
    const UPDATED_AT = null;

    protected $fillable = [
        'body',
        'subject',
        'sent_at',
        'read_at',
        'archived_at', // could be used to define a global scope
    ];

    protected $dates = [
        'sent_at',
        'read_at',
        'archived_at',
    ];

    protected $casts = [

    ];

    public function getIsReadAttribute(): bool
    {
        return $this->read_at != null;
    }
}
