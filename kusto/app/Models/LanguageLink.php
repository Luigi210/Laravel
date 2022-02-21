<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageLink extends Model
{
    use HasFactory;

    public function languageLinks(){
        return $this->belongsTo(LanguageLinks::class);
    }
}
