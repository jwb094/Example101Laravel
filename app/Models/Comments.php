<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'blog_posts_id',
        'body',
    ];


    public function allPostsComments(){
        return $this->hasMany(blogPosts::class);
    }
}
