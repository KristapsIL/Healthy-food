<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Food extends Model
{
    use HasFactory;
    
    public $fillable = ['name','image','short_description', 'description', 'recipe', 'rating', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

}
