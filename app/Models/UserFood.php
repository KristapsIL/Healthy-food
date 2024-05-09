<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFood extends Model
{
    use HasFactory;
    public $fillable = ['name', 'description', 'recipe', 'user_id','approved'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }
}
