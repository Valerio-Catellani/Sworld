<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Weapon;
use App\Models\Armor;

class Character extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function weapons()
    {
        return $this->belongsToMany(Weapon::class);
    }

    public function armors()
    {
        return $this->belongsToMany(Armor::class);
    }
}
