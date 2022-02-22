<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FooterContactDetails;
use App\Models\Footer;


class FooterContact extends Model
{
    use HasFactory;
    protected $table = 'footer_contact';

    public function details(){

        return $this->hasMany(FooterContactDetails::class);
    }

    public function footer(){

        return $this->belongsTo(Footer::class);
    }
}
