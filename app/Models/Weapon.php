<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Character;
use App\Models\WeaponTipology;
use App\Models\Set;

class Weapon extends Model
{
    use HasFactory;

    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }

    public function weapons()
    {
        return $this->belongsTo(WeaponTipology::class);
    }

    public function sets()
    {
        return $this->belongsTo(Set::class);
    }
}
