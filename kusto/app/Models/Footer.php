<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\FooterAboutPartners;
use \App\Models\FooterContact;
use \App\Models\FooterContactUs;
use \App\Models\FooterSocialIcon;


class Footer extends Model
{
    use HasFactory;
    protected $table = 'footer';

    public function aboutPartners()
    {
        return $this->hasMany(FooterAboutPartners::class);
    }

    public function contact()
    {
        return $this->hasMany(FooterContact::class);
    }

    public function contactUs()
    {
        return $this->hasMany(FooterContactUs::class);
    }

    public function socialIcon()
    {
        return $this->hasMany(FooterSocialIcon::class);
    }
}
