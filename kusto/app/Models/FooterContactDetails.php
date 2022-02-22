<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\FooterContact;


class FooterContactDetails extends Model
{
    use HasFactory;

    public function footer()
    {
        return $this->belongsTo(FooterContact::class);
    }
}
