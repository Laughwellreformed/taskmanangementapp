<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = ['title', 'description', 'scheduled_at', 'created_by'];

    public function creator() {
        return $this->belongsTo(User::class, 'created_by');
    }
}
