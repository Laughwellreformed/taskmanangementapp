<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title', 'description', 'assigned_to', 'created_by', 'due_date', 'status'
    ];

    public function creator() {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function assignee() {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
