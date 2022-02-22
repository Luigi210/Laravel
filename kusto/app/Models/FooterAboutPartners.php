<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Footer;
use App\Models\FooterAboutPartnersDetails;



class FooterAboutPartners extends Model
{
    use HasFactory;
    public function footer(){

        return $this->belongsTo(Footer::class);
    }

    public function details(){

        return $this->hasMany(FooterAboutPartnersDetails::class);
    }
}
