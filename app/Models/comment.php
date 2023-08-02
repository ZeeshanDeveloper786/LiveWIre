<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;    

class comment extends Model
{
    use HasFactory;

    protected $fillable = ['comment','user_id'];

// if you make this relation with the other name you have define column name user_id
    public function User(){
        return $this->belongsTo(User::class);
    }
}
