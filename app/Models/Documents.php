<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{
    protected $fillable = ['title', 'description', 'file'];

    public function folder(){
        return $this->belongsTo('App\Models\Folder');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
