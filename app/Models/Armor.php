<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Character;
use App\Models\ArmorTipology;
use App\Models\Set;

class Armor extends Model
{
    use HasFactory;

    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }

    public function armorsTipologies()
    {
        return $this->belongsTo(ArmorTipology::class);
    }

    public function sets()
    {
        return $this->belongsTo(Set::class);
    }
}
