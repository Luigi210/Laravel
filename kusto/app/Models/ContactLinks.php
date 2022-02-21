<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactLinks extends Model
{
    use HasFactory;

    public function contactLink(){

        return $this->hasMany(ContactLink::class);
    }

    public function header(){

        return $this->belongsTo(Header::class);
    }

}