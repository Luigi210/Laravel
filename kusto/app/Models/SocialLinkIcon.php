<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialLinkIcon extends Model
{
    use HasFactory;
    protected $table = 'about_icon';
    public function icon(){
        return $this->belongsTo(Employee::class);
    }
}
