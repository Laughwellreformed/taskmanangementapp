<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['file_name', 'path', 'uploaded_by'];

    public function uploader() {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
