<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Footer;

class FooterSocialIcon extends Model
{
    use HasFactory;

    protected $table = 'footer_social_icon';
    public function footer(){

        return $this->belongsTo(Footer::class);
    }

}
