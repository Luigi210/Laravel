<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\

class Found extends Model
{
    use HasFactory;

    public function icons(){
        return $this->hasMany(Icon::class);
    }
}
