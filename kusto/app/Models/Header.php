<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;
    protected $table = "table_header";

    public function language(){
        return $this->hasMany(LanguageLinks::class);
    }

    public function contacts(){

        return $this->hasMany(ContactLinks::class);
    }

    public function header(){
        return $this->hasMany(HeaderLinks::class);
    }
}
