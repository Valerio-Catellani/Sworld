<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Weapon;

class WeaponTipology extends Model
{
    use HasFactory;

    public function weapons()
    {
        return $this->hasMany(Weapon::class);
    }
}
