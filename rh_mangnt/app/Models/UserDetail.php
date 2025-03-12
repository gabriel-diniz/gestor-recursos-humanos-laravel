<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    public function user(){
        // Cada usuário tem um user_details / cada user_details pertence a um usuário
        return $this->belongsTo(User::class);
    }
}
