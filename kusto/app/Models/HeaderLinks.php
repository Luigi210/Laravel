<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderLinks extends Model
{
    use HasFactory;
    public function headerLinks(){

        return $this->hasMany(HeaderLink::class);
    }

    public function header(){

        return $this->belongsTo(Header::class);
    }
}
