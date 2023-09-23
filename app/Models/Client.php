<?php

namespace App\Models;

use App\Models\Facture;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function facture(){
        return $this->hasMany(Facture::class);
    }
}
