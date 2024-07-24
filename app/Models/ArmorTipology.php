<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Armor;

class ArmorTipology extends Model
{
    use HasFactory;

    public function armors()
    {
        return $this->hasMany(Armor::class);
    }
}
