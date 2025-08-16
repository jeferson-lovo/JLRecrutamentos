<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{

    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }
}

