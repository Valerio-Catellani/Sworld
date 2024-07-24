<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Armor;
use App\Models\Weapon;


class Set extends Model
{
    use HasFactory;

    public function armors()
    {
        return $this->hasMany(Armor::class);
    }

    public function weapons()
    {
        return $this->hasMany(Weapon::class);
    }
}
