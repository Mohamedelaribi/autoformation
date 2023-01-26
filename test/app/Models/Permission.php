<?php

namespace App\Models;
use App\Models\Profil;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    public function profile(){
        return $this->belongsToMany(Profil::class,'permission_profil');
    }
}
