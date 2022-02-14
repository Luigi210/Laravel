<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\AboutFound;

class AboutFoundContent extends Model
{
    use HasFactory;
    protected $table = 'aboutfoundcontent';
    public function aboutFound(){

        return $this->belongsTo(AboutFound::class);
    }
}
