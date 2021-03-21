<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    public function folder(){
        return $this->belongsTo('App\Models\Folder');
    }
}
