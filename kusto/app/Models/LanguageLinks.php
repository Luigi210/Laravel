<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageLinks extends Model
{
    use HasFactory;

    public function languageLink(){
        return $this->hasMany(LanguageLink::class);
    }

    public function header(){
        return $this->belongsTo(Header::class);
    }
}
