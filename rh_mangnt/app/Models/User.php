<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticable
{
    use HasFactory;
    use Notifiable;
    
    public function detail(){
        // Cada usuário tem um user_details
        return $this->hasOne(UserDetail::class);
    }

    public function department(){
        // esse usuário pertence a um departamento
        return $this->belongsTo(Department::class);
    }
}
