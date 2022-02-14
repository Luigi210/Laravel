<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\AboutFoundContent;

class AboutFound extends Model
{
    use HasFactory;
    protected $table = 'aboutfound';
    public function aboutFoundContent(){

        return $this->hasMany(AboutFoundContent::class);
    }
}
