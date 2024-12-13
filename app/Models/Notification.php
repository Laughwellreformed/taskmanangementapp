<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['type', 'message', 'user_id', 'is_read'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
