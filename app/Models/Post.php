<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'content',
        'is_published',
        'user_id',
        'post_slug',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
